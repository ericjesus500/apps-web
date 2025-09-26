const tabs = [...document.querySelectorAll(".tabs")];
tabs.forEach(group => {
  const [firstTab, secondTab] = [...group.querySelectorAll(".tab")];
  firstTab.textContent = "Antes";
  secondTab.textContent = "Ahora";
});
