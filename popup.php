     <!-- Add this HTML structure before the closing </body> tag -->
<div class="consultation-modal" id="consultationModal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <div class="form-container">
      <div class="tech-icons">
        <div class="icon code-icon"><i class="fas fa-code"></i></div>
        <div class="icon server-icon"><i class="fas fa-server"></i></div>
        <div class="icon cloud-icon"><i class="fas fa-cloud"></i></div>
      </div>
      <h2>Get Your Free Tech Consultation</h2>
      <p class="subtitle">Let's Build Something Amazing Together</p>
      
      <form id="consultationForm">
        <div class="form-step active" data-step="1">
          <div class="input-group">
            <select class="form-select" required>
              <option value="">What service are you interested in?</option>
              <option>Web Development</option>
              <option>Mobile Apps</option>
              <option>Cloud Solutions</option>
              <option>AI & ML</option>
              <option>IT Consulting</option>
            </select>
          </div>
          <button type="button" class="btn-next">Next →</button>
        </div>

        <div class="form-step" data-step="2">
          <div class="input-group">
            <input type="text" placeholder="Your Name" required>
            <div class="icon-box"><i class="fas fa-user"></i></div>
          </div>
          <div class="input-group">
            <input type="email" placeholder="Work Email" required>
            <div class="icon-box"><i class="fas fa-envelope"></i></div>
          </div>
          <div class="input-group">
            <textarea placeholder="Project Details" rows="3"></textarea>
            <div class="icon-box"><i class="fas fa-file-alt"></i></div>
          </div>
          <div class="form-actions">
            <button type="button" class="btn-prev">← Back</button>
            <button type="submit" class="btn-submit">Send Request</button>
          </div>
        </div>
        
        <div class="progress-bar">
          <div class="progress"></div>
          <span class="step-text">Step 1 of 2</span>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
.consultation-modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.8);
  z-index: 1000;
}

.modal-content {
  position: relative;
  background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
  margin: 5% auto;
  padding: 40px;
  width: 90%;
  max-width: 600px;
  border-radius: 20px;
  color: white;
  animation: modalSlide 0.5s ease-out;
}

@keyframes modalSlide {
  from { transform: translateY(-100px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

.tech-icons .icon {
  position: absolute;
  font-size: 24px;
  animation: float 6s ease-in-out infinite;
}

.code-icon { top: 20px; left: 20px; animation-delay: 0s; }
.server-icon { top: 20px; right: 20px; animation-delay: 1s; }
.cloud-icon { bottom: 20px; left: 50%; animation-delay: 2s; }

@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

.input-group {
  position: relative;
  margin: 25px 0;
}

.input-group input, 
.input-group select,
.input-group textarea {
  width: 100%;
  padding: 15px 20px 15px 50px;
  border: 2px solid #30475e;
  border-radius: 10px;
  background: rgba(255,255,255,0.1);
  color: white;
  font-size: 16px;
  transition: all 0.3s ease;
}

.input-group textarea {
  padding: 15px 20px 15px 50px;
  height: 100px;
}

.icon-box {
  position: absolute;
  left: 15px;
  top: 50%;
  transform: translateY(-50%);
  color: #e94584;
}

.btn-next, .btn-submit {
  background: #e94584;
  color: white;
  padding: 12px 30px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-next:hover, .btn-submit:hover {
  background: #ff6b9d;
  transform: translateY(-2px);
}

.progress-bar {
  height: 4px;
  background: #30475e;
  border-radius: 2px;
  margin: 20px 0;
  position: relative;
}

.progress {
  height: 100%;
  width: 50%;
  background: #e94584;
  transition: width 0.3s ease;
}

.step-text {
  position: absolute;
  right: 0;
  top: -25px;
  font-size: 0.9em;
  color: #7c8aa5;
}

.close-btn {
  position: absolute;
  right: 20px;
  top: 20px;
  font-size: 30px;
  cursor: pointer;
  transition: color 0.3s ease;
}

.close-btn:hover {
  color: #e94584;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('consultationModal');
  const btn = document.querySelector('a[href="#contact"]');
  const closeBtn = document.querySelector('.close-btn');
  
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    modal.style.display = 'block';
  });

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', (e) => {
    if(e.target === modal) {
      modal.style.display = 'none';
    }
  });

  // Form steps logic
  const formSteps = document.querySelectorAll('.form-step');
  let currentStep = 0;

  document.querySelector('.btn-next').addEventListener('click', () => {
    formSteps[currentStep].classList.remove('active');
    currentStep++;
    formSteps[currentStep].classList.add('active');
    document.querySelector('.progress').style.width = '100%';
    document.querySelector('.step-text').textContent = 'Step 2 of 2';
  });

  document.querySelector('.btn-prev').addEventListener('click', () => {
    formSteps[currentStep].classList.remove('active');
    currentStep--;
    formSteps[currentStep].classList.add('active');
    document.querySelector('.progress').style.width = '50%';
    document.querySelector('.step-text').textContent = 'Step 1 of 2';
  });

  // Form submission
  document.getElementById('consultationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    modal.style.display = 'none';
    // Add your form submission logic here
    alert('Thank you! We will contact you shortly.');
  });
});
</script>