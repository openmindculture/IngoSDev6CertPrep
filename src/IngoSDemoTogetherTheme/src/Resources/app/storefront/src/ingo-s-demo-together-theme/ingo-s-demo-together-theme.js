import Plugin from 'src/plugin-system/plugin.class';

export default class IngoSDemoTogetherTheme extends Plugin {
    init() {
        console.log('init method in class IngoSDemoTogetherTheme');
        this.addAnimationEffectClassNames();
    }
    addAnimationEffectClassNames() {
        console.log('addAnimationEffectClassNames');
        const animatableElements = document.querySelectorAll('.ingos-cost-group');
        for (let i=0; i <= animatableElements.length; i++) {
            console.log(`processing animatableElements[${i}]`);
            animatableElements[i].addEventListener('click', this.costGroupEnterHandler);
        }
    }
    costGroupEnterHandler(activeGroupElement) {
        if (!activeGroupElement) { return; }
        console.log('costGroupEnterHandler');
        activeGroupElement.classList.add("ingos-active");
        const activeId = activeGroupElement.id;
        const costGroupContentWrapper = document.getElementById("ingos-cost-group-contents")
        const activeContent = costGroupContentWrapper.querySelector("*[data-for='" +  activeId + "']");
        activeContent.classList.add("ingos-active");
        const activeBar = activeGroupElement.querySelector(".ingos-cost-group-bar");
        if (activeBar) { activeBar.classList.add("animate__animated", "animate__pulse"); }

        const inactiveGroups = document.getElementsByClassName("ingos-cost-group");
        for (let i = 0; i < inactiveGroups.length; i++) {
            if (inactiveGroups.item(i) != activeGroupElement) {
                inactiveGroups.item(i).classList.remove("ingos-active");
                const inactiveBar = inactiveGroups.item(i).querySelector(".ingos-cost-group-bar");
                if (inactiveBar) { inactiveBar.classList.remove("animate__animated", "animate__pulse"); }
            }
        }

        var activeGroup = document.getElementsByClassName("ingos-cost-group-content");
        for (let i = 0; i < activeGroup.length; i++) {
            if (activeGroup.item(i) != activeContent) {
                activeGroup.item(i).classList.remove("ingos-active");
            }
        }
    }
}