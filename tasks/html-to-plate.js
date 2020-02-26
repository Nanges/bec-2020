const fs = require("fs");
const fse = require("fs-extra");
const path = require("path");
const jsdom = require("jsdom");
const { JSDOM } = jsdom;

const ENTRY_PATH = `${__dirname}/backup/www`;
const OUTPUT_PATH = `${__dirname}/../app/views/pages`;

const walk = (p, output, filter) => {
  fs.readdirSync(p).forEach(entry => {
    const fullPath = `${p}/${entry}`;

    if (fs.lstatSync(fullPath).isDirectory()) {
      walk(fullPath, output, filter);
    } else {
      if (!filter) {
        output.push(fullPath);
      } else if (filter(fullPath)) {
        output.push(fullPath);
      }
    }
  });

  return output;
};

const process = htmlPath => {
  const dom = new JSDOM(fs.readFileSync(htmlPath, "utf8"));

  try {
    const parsed = path.parse(htmlPath);

    const outputPath = `${OUTPUT_PATH}${parsed.dir.substr(ENTRY_PATH.length)}/${
      parsed.name
    }.php`;

    const matches = parsed.dir.match(/\/(en|nl)/);

    const data = {
      layout: matches && matches[1] ? `main_${matches[1]}` : "main_fr",
      tab_title: dom.window.document.querySelector("title").innerHTML,
      title: dom.window.document.querySelector("#bloc1b").textContent,
      top3: dom.window.document.querySelector("#Top3").innerHTML,
      content: dom.window.document.querySelector("#content").innerHTML,
      banner: dom.window.document.querySelector("#banner").innerHTML
    };

    fse.outputFileSync(outputPath, render(data));
  } catch (e) {
    console.log(e);
    console.log(`Template generation failed for ${htmlPath}`);
  }
};

const render = data => `
	<?php 
		$this->layout("/layout/${data.layout}", [
			"tab_title" => "${data.tab_title}",
			"title" => "${data.title}"
		]); 
	?>
	${data.content}

	<?php $this->start("banner") ?>
	${data.banner}
	<?php $this->stop() ?>

	<?php $this->start("top3") ?>
	${data.top3}
	<?php $this->stop() ?>
`;

walk(ENTRY_PATH, [], p => path.extname(p) === ".html").forEach(process);
