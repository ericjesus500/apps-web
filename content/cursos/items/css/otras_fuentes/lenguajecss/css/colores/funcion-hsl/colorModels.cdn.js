const page = document.querySelector(".color-models");

const models = [
  { model: "rgb", first: 50, limits: [0, 25, 50, 75, 100, 125, 150, 175, 200, 225, 255] },
  { model: "hsl", first: 255, limits: ["0%", "10%", "20%", "30%", "40%", "50%", "60%", "70%", "80%", "90%", "100%"] }
];

const createRGBBoxes = (container, model, first, limits) => {
  container.style.setProperty("--elements", limits.length);
  for (let g = 0; g < limits.length; g++) {
    for (let b = 0; b < limits.length; b++) {
      const div = document.createElement("div");
      div.classList.add("box");
      div.dataset.title = `${model}(${first} ${limits[g]} ${limits[b]})`;
      div.style.setProperty("--color", div.dataset.title);
      container.appendChild(div);
    }
  }
};

for (let p = 0; p < models.length; p++) {
  const container = document.createElement("div");
  container.classList.add("container");

  container.innerHTML += `<div class="color-title">${models[p].model.toUpperCase()}</div>`;
  createRGBBoxes(container, models[p].model, models[p].first, models[p].limits);
  page.appendChild(container);
}

const styles = /* html */`<style>
.color-models {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  justify-content: center;
}

.color-models .color-title {
  color: #fff;
}

.color-models .container > div:first-child {
  font-weight: bold;
  grid-column-start: 1;
  grid-column-end: calc(var(--elements) + 1);
  text-align: center;
  font-family: EnterCommand;
  font-size: 3rem;
}

.color-models .container {
  display: grid;
  grid-template-columns: repeat(var(--elements), 35px);
  grid-template-rows: 55px repeat(11, 35px);
  border: 3px solid black;
  padding: 5px;
  background: #000;
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
