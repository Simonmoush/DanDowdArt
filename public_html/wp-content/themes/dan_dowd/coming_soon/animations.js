const doneTypingEvent = new Event("doneTyping");

window.addEventListener("DOMContentLoaded", function(){

	let type_in = document.querySelectorAll(".anim-type");
	let slide_in = document.querySelectorAll(".anim-slide");

	// hide all the elements that will get typed in
	type_in.forEach(function(elem){
		elem.style.visibility = "hidden";
	});

	slide_in.forEach(function(elem){
		elem.style.opacity = 0;
	});

	window.type_in_elements = Array.from(type_in);

	type(window.type_in_elements.shift());

});

window.addEventListener("doneTyping", function(){
	anime({
		targets: ".anim-slide",
		translateY: [-50, 0],
		opacity: [0, 1],
		easing: "easeOutQuart",
		duration: 1000,
		delay: anime.stagger(400)
	});
});


function type(elem, letter_delay = 75, delay_variation = 100, trigger_next = true, trigger_delay = 800){
	let content = elem.textContent;
	elem.textContent = "";
	elem.style.visibility = "visible";

	function next_letter(remaining){
		let content = elem.textContent;
		if(remaining.length > 0){
			elem.textContent += remaining.slice(0,1);
			let next_variation = (Math.random()-0.5) * delay_variation;
			setTimeout(next_letter, letter_delay + next_variation, remaining.slice(1));
		}else{ // done typing
			if(trigger_next){
				if(window.type_in_elements.length > 0){
					setTimeout(type, trigger_delay, window.type_in_elements.shift(), letter_delay, delay_variation, trigger_next, trigger_delay);
				}else{
					window.dispatchEvent(doneTypingEvent);
				}
			}

		}
	}

	next_letter(content);
}
