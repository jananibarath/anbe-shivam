(function () {
  const config = window.ASWhatsApp || {};
  const number = config.number || "";

  function openWhatsApp(message) {
    if (!number) return;
    const text = encodeURIComponent(message || config.defaultMessage || "");
    const url = `https://wa.me/${number}?text=${text}`;
    window.open(url, "_blank", "noopener");
  }

  document.querySelectorAll("[data-as-whatsapp-message]").forEach((el) => {
    el.addEventListener("click", () => {
      openWhatsApp(el.getAttribute("data-as-whatsapp-message"));
    });
  });

  const form = document.querySelector(".as-contact-form");
  if (!form) return;

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(form);
    const lines = [
      "Namaste. I would like a review for old religious items.",
      "",
      `Name: ${formData.get("name") || ""}`,
      `Phone / WhatsApp: ${formData.get("phone") || ""}`,
      `City: ${formData.get("city") || ""}`,
      `State: ${formData.get("state") || ""}`,
      `Type of items: ${formData.get("items") || ""}`,
      `Brief message: ${formData.get("message") || ""}`,
      "",
      "I will share clear item photos for review.",
    ];

    openWhatsApp(lines.join("\n"));
  });
})();
