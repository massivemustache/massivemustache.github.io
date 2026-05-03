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
