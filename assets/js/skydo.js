// Add animation to progress bars when they come into view
		document.addEventListener('DOMContentLoaded', function() {
			const progressBars = document.querySelectorAll('.tech-progress');

			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.style.animation = 'progressBar 1.5s ease-in-out forwards';
						observer.unobserve(entry.target);
					}
				});
			}, {
				threshold: 0.5
			});

			progressBars.forEach(bar => {
				observer.observe(bar);
			});
		});
        // next 
        	document.addEventListener('DOMContentLoaded', function() {
			// Counter animation function
			function animateCounters() {
				const counters = document.querySelectorAll('.counter');
				const speed = 200; // The lower the faster

				counters.forEach(counter => {
					const target = +counter.getAttribute('data-target');
					const count = +counter.innerText;
					const increment = target / speed;

					if (count < target) {
						counter.innerText = Math.ceil(count + increment);
						setTimeout(animateCounters, 1);
					} else {
						counter.innerText = target;

						// Add decimal for numbers like 2.5
						if (target % 1 !== 0) {
							counter.innerText = target.toFixed(1);
						}
					}
				});
			}

			// Intersection Observer to trigger animation when section is in view
			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						animateCounters();
						observer.unobserve(entry.target);
					}
				});
			}, {
				threshold: 0.5
			});

			const statsSection = document.querySelector('.stats-section');
			if (statsSection) {
				observer.observe(statsSection);
			}

			// Add hover effects
			const statCards = document.querySelectorAll('.stat-card');
			statCards.forEach(card => {
				card.addEventListener('mouseenter', function() {
					this.style.transform = 'translateY(-10px)';
					this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.1)';
				});

				card.addEventListener('mouseleave', function() {
					this.style.transform = '';
					this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.05)';
				});
			});
		});
        // web development 
        	document.addEventListener('DOMContentLoaded', function() {
			// Counter animation function
			function animateCounters() {
				const counters = document.querySelectorAll('.counter');
				const speed = 200; // The lower the faster

				counters.forEach(counter => {
					const target = +counter.getAttribute('data-target');
					const count = +counter.innerText;
					const increment = target / speed;

					if (count < target) {
						counter.innerText = Math.ceil(count + increment);
						setTimeout(animateCounters, 1);
					} else {
						counter.innerText = target;

						// Add decimal for numbers like 2.5
						if (target % 1 !== 0) {
							counter.innerText = target.toFixed(1);
						}
					}
				});
			}

			// Intersection Observer to trigger animation when section is in view
			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						animateCounters();
						observer.unobserve(entry.target);
					}
				});
			}, {
				threshold: 0.5
			});

			const statsSection = document.querySelector('.stats-section');
			if (statsSection) {
				observer.observe(statsSection);
			}

			// Add hover effects
			const statCards = document.querySelectorAll('.stat-card');
			statCards.forEach(card => {
				card.addEventListener('mouseenter', function() {
					this.style.transform = 'translateY(-10px)';
					this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.1)';
				});

				card.addEventListener('mouseleave', function() {
					this.style.transform = '';
					this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.05)';
				});
			});
		});
        // next 
