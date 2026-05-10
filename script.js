const compareRanges = document.querySelectorAll(".compare-range");
const siteHeader = document.querySelector(".site-header");
const siteMenuLinks = Array.from(document.querySelectorAll(".site-menu-item"));

if (siteMenuLinks.length) {
  const menuTargets = siteMenuLinks
    .map((link) => {
      const href = link.getAttribute("href");

      if (!href || !href.startsWith("#")) {
        return null;
      }

      const target = document.querySelector(href);

      if (!target) {
        return null;
      }

      return { link, target };
    })
    .filter(Boolean);

  const setActiveMenuLink = (activeLink) => {
    siteMenuLinks.forEach((link) => {
      link.classList.toggle("is-active", link === activeLink);
    });
  };

  const syncActiveMenuLink = () => {
    const headerOffset = siteHeader?.offsetHeight || 0;
    const triggerY = window.scrollY + headerOffset + 120;
    let activeItem = menuTargets[0] || null;

    menuTargets.forEach((item) => {
      if (item.target.offsetTop <= triggerY) {
        activeItem = item;
      }
    });

    if (activeItem) {
      setActiveMenuLink(activeItem.link);
    }
  };

  siteMenuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      setActiveMenuLink(link);
    });
  });

  window.addEventListener("scroll", syncActiveMenuLink, { passive: true });
  window.addEventListener("load", syncActiveMenuLink);
  syncActiveMenuLink();
}

if (siteHeader) {
  const syncHeaderState = () => {
    siteHeader.classList.toggle("is-scrolled", window.scrollY > 12);
  };

  syncHeaderState();
  window.addEventListener("scroll", syncHeaderState, { passive: true });
}

compareRanges.forEach((range) => {
  const slider = range.closest(".compare-slider");

  const updateReveal = () => {
    slider.style.setProperty("--reveal", `${range.value}%`);
  };

  range.addEventListener("input", updateReveal);
  updateReveal();
});

const benefitsSection = document.querySelector(".benefits-section");
const benefitsVideoBlock = document.querySelector(".benefits-video-block");
const benefitsVideo = document.querySelector(".benefits-video");

if (benefitsSection && benefitsVideoBlock && benefitsVideo) {
  const toggleButton = benefitsVideoBlock.querySelector(".video-toggle");
  const muteButton = benefitsVideoBlock.querySelector(".video-mute");
  const progress = benefitsVideoBlock.querySelector(".video-progress");
  const time = benefitsVideoBlock.querySelector(".video-time");
  const toggleIcon = toggleButton?.querySelector("i");
  const muteIcon = muteButton?.querySelector("i");
  const benefitsPlaylist = (benefitsVideo.dataset.playlist || "")
    .split(",")
    .map((item) => item.trim())
    .filter(Boolean);
  let currentBenefitsVideoIndex = 0;
  let controlsTimer;

  benefitsVideo.removeAttribute("controls");

  const setBenefitsVideoSource = (index) => {
    const nextSource = benefitsPlaylist[index];

    if (!nextSource || benefitsVideo.currentSrc.endsWith(nextSource)) {
      return;
    }

    currentBenefitsVideoIndex = index;
    benefitsVideo.src = nextSource;
    benefitsVideo.load();
  };

  const showControlsBriefly = () => {
    benefitsVideoBlock.classList.add("is-controls-visible");
    window.clearTimeout(controlsTimer);

    if (!benefitsVideo.paused) {
      controlsTimer = window.setTimeout(() => {
        benefitsVideoBlock.classList.remove("is-controls-visible");
      }, 1600);
    }
  };

  const formatVideoTime = (seconds) => {
    if (!Number.isFinite(seconds)) {
      return "0:00";
    }

    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = Math.floor(seconds % 60).toString().padStart(2, "0");

    return `${minutes}:${remainingSeconds}`;
  };

  const updatePlayState = () => {
    const isPaused = benefitsVideo.paused;

    benefitsVideoBlock.classList.toggle("is-video-paused", isPaused);
    toggleButton?.setAttribute("aria-label", isPaused ? "Lire la vidéo" : "Mettre la vidéo en pause");
    toggleIcon?.classList.toggle("fa-play", isPaused);
    toggleIcon?.classList.toggle("fa-pause", !isPaused);
  };

  const updateMuteState = () => {
    const isMuted = benefitsVideo.muted;

    muteButton?.setAttribute("aria-label", isMuted ? "Activer le son" : "Couper le son");
    muteIcon?.classList.toggle("fa-volume-xmark", isMuted);
    muteIcon?.classList.toggle("fa-volume-high", !isMuted);
  };

  const updateProgress = () => {
    const duration = benefitsVideo.duration || 0;
    const percent = duration ? (benefitsVideo.currentTime / duration) * 100 : 0;

    if (progress) {
      progress.value = String(percent);
      progress.style.setProperty("--progress", `${percent}%`);
    }

    if (time) {
      time.textContent = formatVideoTime(benefitsVideo.currentTime);
    }
  };

  const playBenefitsVideo = () => {
    benefitsVideo.muted = true;
    benefitsVideo.play().catch(() => {
      updatePlayState();
    });
    updateMuteState();
  };

  toggleButton?.addEventListener("click", () => {
    if (benefitsVideo.paused) {
      benefitsVideo.play().catch(() => {});
    } else {
      benefitsVideo.pause();
    }
  });

  muteButton?.addEventListener("click", () => {
    benefitsVideo.muted = !benefitsVideo.muted;
    updateMuteState();
  });

  benefitsVideo.addEventListener("click", () => {
    showControlsBriefly();

    if (benefitsVideo.paused) {
      benefitsVideo.play().catch(() => {});
    } else {
      benefitsVideo.pause();
    }
  });

  progress?.addEventListener("input", () => {
    const duration = benefitsVideo.duration || 0;

    if (duration) {
      benefitsVideo.currentTime = (Number(progress.value) / 100) * duration;
    }
  });

  benefitsVideoBlock.addEventListener("mousemove", showControlsBriefly);
  benefitsVideoBlock.addEventListener("touchstart", showControlsBriefly, { passive: true });
  benefitsVideo.addEventListener("play", updatePlayState);
  benefitsVideo.addEventListener("pause", updatePlayState);
  benefitsVideo.addEventListener("timeupdate", updateProgress);
  benefitsVideo.addEventListener("loadedmetadata", updateProgress);
  benefitsVideo.addEventListener("volumechange", updateMuteState);
  benefitsVideo.addEventListener("ended", () => {
    const nextIndex = currentBenefitsVideoIndex + 1;

    if (nextIndex >= benefitsPlaylist.length) {
      currentBenefitsVideoIndex = 0;
      updatePlayState();
      return;
    }

    setBenefitsVideoSource(nextIndex);
    playBenefitsVideo();
  });

  if (benefitsPlaylist.length) {
    setBenefitsVideoSource(0);
  }

  if ("IntersectionObserver" in window) {
    const videoObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          playBenefitsVideo();
        } else {
          benefitsVideo.pause();
        }
      });
    }, { threshold: 0.48 });

    videoObserver.observe(benefitsSection);
  }

  updatePlayState();
  updateMuteState();
  updateProgress();
}

if (window.gsap && window.ScrollTrigger) {
  gsap.registerPlugin(ScrollTrigger);

  const timelineTrack = document.querySelector(".timeline-track");
  const timelineFill = document.querySelector(".timeline-line-fill");
  const timelineSteps = document.querySelectorAll(".timeline-step");

  if (timelineTrack && timelineFill && timelineSteps.length) {
    gsap.to(timelineFill, {
      scaleY: 1,
      ease: "none",
      scrollTrigger: {
        trigger: timelineTrack,
        start: "top 72%",
        end: "bottom 62%",
        scrub: 0.9,
      },
    });

    timelineSteps.forEach((step) => {
      const card = step.querySelector(".timeline-card");

      gsap.to(card, {
        y: 0,
        duration: 0.8,
        ease: "power2.out",
        scrollTrigger: {
          trigger: step,
          start: "top 76%",
          end: "top 46%",
          scrub: 0.6,
          onEnter: () => step.classList.add("is-active"),
          onEnterBack: () => step.classList.add("is-active"),
          onLeaveBack: () => step.classList.remove("is-active"),
        },
      });
    });
  }

  const bodyFocusIndicator = document.querySelector(".body-focus-indicator");
  const faceRecapIndicator = document.querySelector(".face-recap-indicator");

  if (bodyFocusIndicator) {
    let bodyFocusIndicatorTimer = null;

    ScrollTrigger.create({
      trigger: bodyFocusIndicator,
      start: "top 78%",
      once: true,
      onEnter: () => {
        bodyFocusIndicatorTimer = window.setTimeout(() => {
          bodyFocusIndicator.classList.add("is-visible");
        }, 3000);
      },
    });
  }

  if (faceRecapIndicator) {
    let faceRecapIndicatorTimer = null;

    ScrollTrigger.create({
      trigger: faceRecapIndicator,
      start: "top 78%",
      once: true,
      onEnter: () => {
        faceRecapIndicatorTimer = window.setTimeout(() => {
          faceRecapIndicator.classList.add("is-visible");
        }, 120);
      },
    });

    window.addEventListener("beforeunload", () => {
      if (faceRecapIndicatorTimer) {
        window.clearTimeout(faceRecapIndicatorTimer);
      }
    });
  }

}

const faqItems = document.querySelectorAll(".faq-item");

const setFaqPanelHeight = (item, isOpen) => {
  const panel = item.querySelector(".faq-panel");

  if (!panel) {
    return;
  }

  panel.style.height = isOpen ? `${panel.scrollHeight}px` : "0px";
};

faqItems.forEach((item) => {
  const trigger = item.querySelector(".faq-trigger");

  if (!trigger) {
    return;
  }

  setFaqPanelHeight(item, item.classList.contains("is-open"));

  trigger.addEventListener("click", () => {
    faqItems.forEach((otherItem) => {
      const otherTrigger = otherItem.querySelector(".faq-trigger");
      const shouldOpen = otherItem === item && !otherItem.classList.contains("is-open");

      otherItem.classList.toggle("is-open", shouldOpen);

      if (otherTrigger) {
        otherTrigger.setAttribute("aria-expanded", String(shouldOpen));
      }

      setFaqPanelHeight(otherItem, shouldOpen);
    });
  });
});

window.addEventListener("resize", () => {
  faqItems.forEach((item) => {
    if (item.classList.contains("is-open")) {
      setFaqPanelHeight(item, true);
    }
  });
});
