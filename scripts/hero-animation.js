function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function changeImage() {
  const images = document.querySelectorAll(".hero-grid > img");

  let index1 = getRandomInt(0, 14);
  let index2 = getRandomInt(0, 14);
  while (index1 === index2) index2 = getRandomInt(0, 14);

  try {
    const img1 = images.item(index1);
    const img2 = images.item(index2);

    img1.classList.add("active");
    img2.classList.add("active");

    setTimeout(() => {
      images.forEach((el, i) => {
        if (i !== index1 || i !== index2) el.classList.remove("animate");
        if (i === index1 || i === index2) el.classList.add("animate");
      });

      const img1_src = img1.src;
      img1.src = img2.src;
      img2.src = img1_src;
    }, 750);
  } catch (e) {
    console.warn(e.message);
    console.error(e);
  }
}

window.addEventListener("DOMContentLoaded", () => {
  setInterval(changeImage, 2000);
});
