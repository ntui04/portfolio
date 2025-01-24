
// Contact form handling
document.getElementById('contact-form').addEventListener('submit', handleSubmit);

function handleSubmit(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    // Here you would typically send this data to a server
    console.log('Form submitted:', { name, email, message });
    
    // Clear form
    event.target.reset();
    alert('Thank you for your message! I will get back to you soon.');
    
    return false;
}
