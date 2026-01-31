export default {
    mounted(el, binding) {
        // Click event listener on the document
        const handleClickOutside = (event) => {
            if (!el.contains(event.target) && el !== event.target) {
                // Clicked outside the element, call the provided method
                binding.value(event);
            }
        };

        // Attach the event listener
        document.addEventListener('click', handleClickOutside);

        // Store the event listener so we can remove it later
        el.__vueClickOutside__ = handleClickOutside;
    },
    unmounted(el) {
        // Remove the event listener when the element is unmounted
        document.removeEventListener('click', el.__vueClickOutside__);
        delete el.__vueClickOutside__;
    },
};
