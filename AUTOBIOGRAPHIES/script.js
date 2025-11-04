// ---------------- SEARCH FUNCTION ----------------
document.getElementById("searchInput").addEventListener("keyup", function () {
  const searchValue = this.value.toLowerCase();
  const bios = document.querySelectorAll(".bio");

  bios.forEach((bio) => {
    const title = bio.querySelector("h2").textContent.toLowerCase();
    const text = bio.textContent.toLowerCase();

    if (title.includes(searchValue) || text.includes(searchValue)) {
      bio.style.display = "block";
    } else {
      bio.style.display = "none";
    }
  });
});

// ---------------- TABLE OF CONTENTS ----------------
const toc = document.getElementById("toc");
document.querySelectorAll(".bio h2").forEach((heading, index) => {
  const id = "leader-" + index;
  heading.id = id;

  const li = document.createElement("li");
  const a = document.createElement("a");
  a.href = "#" + id;
  a.textContent = heading.textContent;
  li.appendChild(a);
  toc.appendChild(li);
});

// ---------------- DARK/LIGHT MODE TOGGLE ----------------
const toggle = document.getElementById("themeToggle");
toggle.addEventListener("click", () => {
  document.body.classList.toggle("dark");
  toggle.textContent = document.body.classList.contains("dark") ? "☀️" : "🌙";
});

// ---------------- LIKE BUTTONS ----------------
document.querySelectorAll(".like-btn").forEach((btn) => {
  let liked = false;
  btn.addEventListener("click", () => {
    liked = !liked;
    btn.textContent = liked ? "💖 Liked" : "❤️ Like";
  });
});

// ---------------- BACK TO TOP BUTTON ----------------
const backToTopBtn = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
  if (window.scrollY > 400) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
});

backToTopBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
