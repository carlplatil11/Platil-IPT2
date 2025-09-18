import React, { useEffect, useState } from "react";
import axios from "axios";

axios.defaults.baseURL = "http://localhost:8000";


export default function ContactUs() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    message: "",
  });

  const [messages, setMessages] = useState([]);

  useEffect(() => {
  axios
    .get("/api/contact")
    .then((response) => setMessages(response.data))
    .catch((error) => console.error("Error fetching messages:", error));
}, []);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({ ...formData, [name]: value });
  };

  const handleSubmit = (e) => {
  e.preventDefault();

  console.log("Submitting form data:", formData);

  if (formData.id) {
    // Update existing message
    axios
      .put(`/api/contact/${formData.id}`, formData)
      .then((response) => {
        setMessages(
          messages.map((message) =>
            message.id === formData.id ? response.data : message
          )
        );
        setFormData({ name: "", email: "", message: "" }); // Clear the form
        alert(`Message ID: ${formData.id} has been updated.`);
      })
      .catch((error) => {
        console.error("Error updating message:", error.response?.data || error.message);
        alert("Failed to update the message. Please check the console for details.");
      });
  } else {
    // Create new message
    axios
      .post("/api/contact", formData)
      .then((response) => {
        setMessages([...messages, response.data]); // Add the new message to the table
        setFormData({ name: "", email: "", message: "" }); // Clear the form
        alert(`Thank you, ${formData.name}! Your message has been sent.`);
      })
      .catch((error) => {
        console.error("Error submitting message:", error.response?.data || error.message);
        alert("Failed to submit the message. Please check the console for details.");
      });
  }
};

  const handleEdit = (id) => {
    const messageToEdit = messages.find((message) => message.id === id);
    if (messageToEdit) {
      setFormData({
        id: messageToEdit.id,
        name: messageToEdit.name,
        email: messageToEdit.email,
        message: messageToEdit.message,
      });
      alert(`Editing message ID: ${id}. Update the form and submit.`);
    } else {
      alert("Message not found.");
    }
  };

  const handleDelete = (id) => {
    axios
      .delete(`/api/contact/${id}`)
      .then(() => {
        setMessages(messages.filter((message) => message.id !== id));
        alert(`Message ID: ${id} has been deleted.`);
      })
      .catch((error) => {
        console.error("Error deleting message:", error.response?.data || error.message);
        alert("Failed to delete the message. Please check the console for details.");
      });
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

        {/* Messages Table */}
        <div className="messages-table">
          <h2>Messages</h2>
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              {messages.map((message) => (
                <tr key={message.id}>
                  <td>{message.name}</td>
                  <td>{message.email}</td>
                  <td>{message.message}</td>
                  <td>
                    <button onClick={() => handleEdit(message.id)}>Edit</button>
                    <button onClick={() => handleDelete(message.id)}>Delete</button>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      </div>
    </section>
  );
}
