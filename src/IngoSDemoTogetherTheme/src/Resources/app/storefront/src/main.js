console.log('main.js in theme plugin');
const ingosthetestconstant = "implicit string assigned using const to verify if Shopware has a default transpilation";
console.log(ingosthetestconstant);
// It has and it even optimizes away the above variable.
// BUT where is my function below?

function ingos_cost_group_enter(active_group) {
    active_group.classList.add("ingos-active");
    active_id = active_group.id;
    var cost_group_content_wrapper = document.getElementById("ingos-cost-group-contents")
    var active_content = cost_group_content_wrapper.querySelector("*[data-for='" +  active_id + "']");
    active_content.classList.add("ingos-active");
    var active_bar = active_group.querySelector(".ingos-cost-group-bar");
    if (active_bar) { active_bar.classList.add("animate__animated", "animate__pulse"); }

    var not_active_groups = document.getElementsByClassName("ingos-cost-group");
    for (var i = 0; i < not_active_groups.length; i++) {
        if (not_active_groups.item(i) != active_group) {
            not_active_groups.item(i).classList.remove("ingos-active");
            var not_active_bar = not_active_groups.item(i).querySelector(".ingos-cost-group-bar");
            if (not_active_bar) { not_active_bar.classList.remove("animate__animated", "animate__pulse"); }
        }
    }

    var not_active_contents = document.getElementsByClassName("ingos-cost-group-content");
    for (var i = 0; i < not_active_contents.length; i++) {
        if (not_active_contents.item(i) != active_content) {
            not_active_contents.item(i).classList.remove("ingos-active");
        }
    }
}