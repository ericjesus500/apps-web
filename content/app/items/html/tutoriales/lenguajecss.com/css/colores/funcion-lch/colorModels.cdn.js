const page = document.querySelector(".color-models");

const models = [
  { model: "lch", first: "50", chroma: [0, 25, 50, 75, 100, 125, 150], hue: [0, 45, 90, 135, 180, 225, 270, 315] },
  { model: "oklch", first: "50%", chroma: [0, 0.05, 0.1, 0.15, 0.2, 0.25, 0.3, 0.35, 0.4], hue: [0, 45, 90, 135, 180, 225, 270, 315] }
];

const createBoxes = (container, model, first, second, three) => {
  container.style.setProperty("--elements-x", second.length);
  container.style.setProperty("--elements-y", three.length);
  for (let y = 0; y < three.length; y++) {
    for (let x = 0; x < second.length; x++) {
      const div = document.createElement("div");
      div.classList.add("box");
      div.dataset.title = `${model}(${first} ${second[x]} ${three[y]})`;
      div.style.setProperty("--color", div.dataset.title);
      container.appendChild(div);
    }
  }
};

for (let p = 0; p < models.length; p++) {
  const container = document.createElement("div");
  container.classList.add("container");
  const model = p % 2 === 0 ? "lab" : "oklab";

  container.innerHTML += `<div>${model.toUpperCase()}</div>`;
  createBoxes(container, models[p].model, models[p].first, models[p].chroma, models[p].hue);
  page.appendChild(container);
}

const styles = /* html */`<style>
.color-models {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  justify-content: center;
}

.color-models .container > div:first-child {
  font-weight: bold;
  grid-column-start: 1;
  grid-column-end: calc(var(--elements-x) + 1);
  text-align: center;
  font-family: EnterCommand;
  font-size: 3rem;
}

.color-models .container {
  display: grid;
  grid-template-columns: repeat(var(--elements-x), 35px);
  grid-template-rows: 50px repeat(var(--elements-y), 35px);
  border: 3px solid black;
  padding: 5px;
  background: #000;
  color: #fff;
}

.color-models .box {
  background: var(--color, grey);
  color: #fff;
  display: grid;
  place-items: center;
  font-family: Montserrat;
  font-size: 0.8rem;
  text-shadow: 1px 1px 0 black;
  padding: 6px;
}

.color-models .box:hover {
  border: 2px solid black;
  transform: scale(1.5);
  z-index: 5;
}

.color-models .box:hover::after {
  display: flex;
  width: 110px;
  justify-content: center;
  translate: -50px 30px;
  content: attr(data-title);
  background: #333c;
  padding: 2px;
  color: #fff;
  font-size: 0.6rem;
}
</style>`;

page.innerHTML += styles;
