(function () {
  var user = ["con", "tact"].join("");
  var domain = ["massivem", "ustache", ".", "games"].join("");
  var email = user + "@" + domain;
  var links = document.querySelectorAll(".js-contact-link");

  links.forEach(function (link) {
    link.href = "mailto:" + email;
    link.textContent = email;
  });
})();

(function () {
  var gallery = document.querySelector("[data-screenshot-gallery]");
  var lightbox = document.querySelector("[data-gallery-lightbox]");

  if (!gallery || !lightbox || typeof lightbox.showModal !== "function") return;

  var items = Array.prototype.slice.call(gallery.querySelectorAll("[data-gallery-item]"));
  var image = lightbox.querySelector("[data-gallery-image]");
  var dotsContainer = lightbox.querySelector("[data-gallery-dots]");
  var closeButton = lightbox.querySelector("[data-gallery-close]");
  var prevButton = lightbox.querySelector("[data-gallery-prev]");
  var nextButton = lightbox.querySelector("[data-gallery-next]");
  var activeIndex = 0;
  var lastTrigger = null;

  if (!items.length || !image || !dotsContainer) return;

  var slides = items.map(function (item) {
    var itemImage = item.querySelector("img");

    return {
      src: item.href,
      alt: itemImage ? itemImage.alt : "",
    };
  });

  function moveIndex(direction) {
    return (activeIndex + direction + slides.length) % slides.length;
  }

  function updateGallery(index) {
    activeIndex = (index + slides.length) % slides.length;

    image.src = slides[activeIndex].src;
    image.alt = slides[activeIndex].alt;

    Array.prototype.forEach.call(dotsContainer.children, function (dot, dotIndex) {
      var isActive = dotIndex === activeIndex;

      dot.classList.toggle("is-active", isActive);
      dot.setAttribute("aria-current", isActive ? "true" : "false");
    });
  }

  function openGallery(index, trigger) {
    lastTrigger = trigger;
    updateGallery(index);
    lightbox.showModal();
    closeButton.focus();
  }

  function closeGallery() {
    lightbox.close();
  }

  slides.forEach(function (slide, index) {
    var dot = document.createElement("button");

    dot.className = "lightbox-dot";
    dot.type = "button";
    dot.setAttribute("aria-label", "Show screenshot " + (index + 1));
    dot.addEventListener("click", function () {
      updateGallery(index);
    });
    dotsContainer.appendChild(dot);
  });

  items.forEach(function (item, index) {
    item.addEventListener("click", function (event) {
      event.preventDefault();
      openGallery(index, item);
    });
  });

  closeButton.addEventListener("click", closeGallery);

  prevButton.addEventListener("click", function () {
    updateGallery(moveIndex(-1));
  });

  nextButton.addEventListener("click", function () {
    updateGallery(moveIndex(1));
  });

  lightbox.addEventListener("click", function (event) {
    if (event.target === lightbox) {
      closeGallery();
    }
  });

  lightbox.addEventListener("keydown", function (event) {
    if (event.key === "ArrowLeft") {
      event.preventDefault();
      updateGallery(moveIndex(-1));
    }

    if (event.key === "ArrowRight") {
      event.preventDefault();
      updateGallery(moveIndex(1));
    }
  });

  lightbox.addEventListener("close", function () {
    if (lastTrigger) {
      lastTrigger.focus();
    }
  });
})();

(function () {
  var iframes = document.querySelectorAll("[data-youtube-iframe]");

  if (!iframes.length) return;

  function appendPlayerParams(iframe) {
    var src = iframe.getAttribute("src");
    var url = new URL(src, window.location.href);

    url.searchParams.set("enablejsapi", "1");

    if (window.location.protocol === "http:" || window.location.protocol === "https:") {
      url.searchParams.set("origin", window.location.origin);
    }

    iframe.src = url.toString();
  }

  function replaceWithFallback(iframe) {
    var card = iframe.closest("[data-youtube-card]");
    var image = iframe.dataset.fallbackImage;
    var title = iframe.dataset.videoTitle || "Watch this BrightGlade Tales video on YouTube";
    var watchUrl = iframe.dataset.watchUrl;

    if (!card || !watchUrl) return;

    card.innerHTML =
      '<a class="video-fallback-card" href="' +
      watchUrl +
      '" target="_blank" rel="noreferrer">' +
      '<span class="video-fallback-thumb">' +
      '<img src="' +
      image +
      '" alt="" />' +
      '<span class="play-badge" aria-hidden="true">Play</span>' +
      "</span>" +
      '<span class="video-fallback-title">' +
      title +
      "</span>" +
      '<span class="video-fallback-note">YouTube could not load the embedded player here. Open it directly on YouTube.</span>' +
      "</a>";
  }

  function createPlayers() {
    iframes.forEach(function (iframe) {
      new window.YT.Player(iframe, {
        events: {
          onError: function (event) {
            if (Number(event.data) === 153) {
              replaceWithFallback(iframe);
            }
          },
        },
      });
    });
  }

  iframes.forEach(appendPlayerParams);

  window.onYouTubeIframeAPIReady = function () {
    createPlayers();
  };

  var script = document.createElement("script");
  script.src = "https://www.youtube.com/iframe_api";
  document.head.appendChild(script);
})();
