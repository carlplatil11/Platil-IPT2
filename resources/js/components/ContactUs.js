import React, { useState } from "react";

export default function ContactUs() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    message: "",
  });

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({ ...formData, [name]: value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    alert(`Thank you, ${formData.name}! Your message has been sent.`);
    setFormData({ name: "", email: "", message: "" });
  };

  return (
    <section id="contactus" className="contactus-page">
      <div className="content">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Reach out using the details below or send us a message.</p>

        {/* Contact Info Grid */}
        <div className="contact-info-grid">
          <div className="contact-card">
            <h3>📍 Our Office</h3>
            <p>Butuan City, Philippines</p>
          </div>

          <div className="contact-card">
            <h3>📞 Call Us</h3>
            <a href="tel:+639123456789">+63 912 345 6789</a>
          </div>

          <div className="contact-card">
            <h3>📧 Email Us</h3>
            <a href="mailto:support@example.com">akoaningproject@example.com</a>
          </div>
        </div>

        {/* Contact Form */}
        <form className="contact-form" onSubmit={handleSubmit}>
          <h2>Send a Message</h2>
          <input
            type="text"
            name="name"
            placeholder="Your Name"
            value={formData.name}
            onChange={handleChange}
            required
          />
          <input
            type="email"
            name="email"
            placeholder="Your Email"
            value={formData.email}
            onChange={handleChange}
            required
          />
          <textarea
            name="message"
            rows="5"
            placeholder="Your Message, Suggestions or Comments"
            value={formData.message}
            onChange={handleChange}
            required
          />
          <button type="submit">Send Message</button>
        </form>
      </div>
    </section>
  );
}
