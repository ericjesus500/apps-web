const container = document.querySelector(".rgb-colors");
container.attachShadow({ mode: "open" });

container.shadowRoot.innerHTML = /* html */`
  <style>
    :host {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 2em 0;
    }

    .container {
      display: flex;
      flex-direction: column;
      gap: 10px;
      justify-content: center;
      align-items: center;
      font-family: EnterCommand, monospace;
      font-size: 3rem;
      color: #fff;
    }

    kbd {
      background: #ccc;
      color: #444;
      padding: 3px 6px;
      border-radius: 5px;
    }

    .group {
      display: flex;
      gap: 10px;
      align-items: center;
    }

    .box {
      --size: 100px;

      width: var(--size);
      height: var(--size);
      border: 4px solid black;
      font-family: EnterCommand, monospace;
      font-weight: bold;
      font-size: 2.5rem;
      color: #fff;
      display: grid;
      place-items: center;
      cursor: ns-resize;
    }

    .box.rgb {
      width: 275px;
    }

    @media (max-width: 650px) {
      .box { --size: 75px; font-size: 2rem }
    }

    p {
      font-family: var(--primary-font);
      color: #ccc;
    }
  </style>

  <div class="container">
    <div class="group">rgb(
      <div class="box r"></div> +
      <div class="box g"></div> +
      <div class="box b"></div>)
    </div> =
    <div class="box rgb"></div>
  </div>

  <p>Scroll con <strong>rueda de ratón</strong> sobre los cuadrados. <kbd>SHIFT</kbd> más rápido</p>
`;

const [rBox, gBox, bBox, rgbBox] = [...container.shadowRoot.querySelectorAll(".box")];

let r = 150;
let g = 150;
let b = 150;

const update = (r, g, b) => {
  rBox.style.backgroundColor = `rgb(${r} 0 0)`;
  rBox.textContent = r;

  gBox.style.backgroundColor = `rgb(0 ${g} 0)`;
  gBox.textContent = g;

  bBox.style.backgroundColor = `rgb(0 0 ${b})`;
  bBox.textContent = b;

  rgbBox.style.backgroundColor = `rgb(${r} ${g} ${b})`;
  rgbBox.textContent = `rgb(${r} ${g} ${b})`;
};

update(r, g, b);

rBox.addEventListener("wheel", (ev) => {
  ev.preventDefault();
  const inc = ev.deltaY < 0 ? 1 : -1;
  const delta = ev.shiftKey ? inc * 10 : inc;
  r = Math.min(Math.max(0, r + delta), 255);
  update(r, g, b);
});

gBox.addEventListener("wheel", (ev) => {
  ev.preventDefault();
  const inc = ev.deltaY < 0 ? 1 : -1;
  const delta = ev.shiftKey ? inc * 10 : inc;
  g = Math.min(Math.max(0, g + delta), 255);
  update(r, g, b);
});

bBox.addEventListener("wheel", (ev) => {
  ev.preventDefault();
  const inc = ev.deltaY < 0 ? 1 : -1;
  const delta = ev.shiftKey ? inc * 10 : inc;
  b = Math.min(Math.max(0, b + delta), 255);
  update(r, g, b);
});
