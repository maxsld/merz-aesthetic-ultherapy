const compareRanges = document.querySelectorAll(".compare-range");

compareRanges.forEach((range) => {
  const slider = range.closest(".compare-slider");

  const updateReveal = () => {
    slider.style.setProperty("--reveal", `${range.value}%`);
  };

  range.addEventListener("input", updateReveal);
  updateReveal();
});

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
