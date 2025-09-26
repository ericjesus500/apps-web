const container = document.querySelector(".example-2");

container.innerHTML = /* html */`
<style>
  .example-2 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 4rem;
  }

  .group {
    display: flex;
  }

  .example-2 .item {
    display: grid;
    min-width: 112px;
    height: 75px;
    place-items: center;
    cursor: pointer;
    background: color-mix(in var(--space), var(--color), white);
  }

  .example-2 span {
    font-family: Jost;
    background: #000;
    color: #fff;
    padding: 2px 8px;
  }
</style>

`;

const createGroup = (groupSelector, space, color) => {
  const group = document.createElement("div");
  group.classList.add("group", groupSelector);
  for (let i = 0; i < 6; i++) {
    const quantity = (i * 20) + "%";
    group.insertAdjacentHTML("beforeend", /* html */`<div class="item" style="--space: ${space}; --color: ${color} ${quantity}"><span>${quantity}</span></div>`);
  }
  container.appendChild(group);
};

createGroup(".group-1", "srgb", "indigo");
createGroup(".group-2", "oklch", "tomato");
createGroup(".group-2", "xyz", "lime");
