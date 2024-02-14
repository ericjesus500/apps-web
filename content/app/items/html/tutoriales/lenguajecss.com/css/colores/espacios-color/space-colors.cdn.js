const container = document.querySelector(".example-1");

container.innerHTML = /* html */`
<style>
  .example-1 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 3rem;
  }

  .example-1 .item {
    --color: 50% 25% 75%;

    display: grid;
    min-width: 112px;
    height: 75px;
    place-items: center;
    cursor: pointer;
    background: color(var(--space) var(--color));
  }

  .example-1 span {
    font-family: Jost;
    background: #000;
    color: #fff;
    padding: 2px 8px;
  }
</style>

<div class="item" style="--space: srgb"><span>sRGB</span></div>
<div class="item" style="--space: srgb-linear"><span>sRGB lineal</span></div>
<div class="item" style="--space: display-p3"><span>Display P3</span></div>
<div class="item" style="--space: a98-rgb"><span>A98 RGB</span></div>
<div class="item" style="--space: prophoto-rgb"><span>ProPhoto RGB</span></div>
<div class="item" style="--space: rec2020"><span>REC2020</span></div>
<div class="item" style="--space: xyz"><span>XYZ</span></div>
<div class="item" style="--space: xyz-d50"><span>XYZ D50</span></div>
<div class="item" style="--space: xyz-d65"><span>XYZ D65</span></div>
`;
