const container = document.querySelector(".aspect-ratio-calc");
container.attachShadow({ mode: "open" });

container.shadowRoot.innerHTML = /* html */`
<style>
  .container {
    font-family: var(--primary-font);
    color: #fff;
  }

  fieldset {
    display: inline-block;
    margin-bottom: 2rem;
  }

  input {
    font-family: var(--code-font);
    font-size: 1.5rem;
    border: 0;
    padding: 0.5rem;
    background: #333;
    color: gold;
  }

  .rw, .rh {
    width: 75px;
  }

  .pw, .ph {
    width: 125px;
  }

  code {
    color: steelblue;
    font-family: var(--code-font);
    font-size: 1.5rem;
  }
</style>

<div class="container">
  <fieldset>
    <legend>Proporción de aspecto</legend>
    <code>aspect-ratio: </code>
    <input class="rw" type="number" min="1" value="1"> /
    <input class="rh" type="number" min="1" value="1">
  </fieldset>

  <fieldset>
    <legend>Tamaño en píxels</legend>
    <code>width: </code>
    <input class="pw" type="number" min="1" value="640">
    <code>height: </code>
    <input class="ph" type="number" min="1" value="640">
  </fieldset>
</div>
`;

const [rw, rh, pw, ph] = container.shadowRoot.querySelectorAll(".rw, .rh, .pw, .ph");

rw.addEventListener("input", () => update());
rh.addEventListener("input", () => update());
pw.addEventListener("input", () => update());
ph.addEventListener("input", () => updatePw());

const update = () => (ph.value = (Math.max(1, rh.value) * Math.max(1, pw.value)) / Math.max(1, rw.value));
const updatePw = () => (pw.value = (Math.max(1, ph.value) * Math.max(1, rw.value)) / Math.max(1, rh.value));
