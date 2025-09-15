import React from "react";

export default function AboutUs() {
  return (
    <div className="aboutus-page">
      {/* Header */}
      <header className="site-header">
        <div className="logo">MyCompany</div>
        <nav>
          <a href="#aboutus">About Us</a>
          <a href="#contactus">Contact</a>
        </nav>
      </header>

      {/* Page content */}
      <div className="content-wrapper">
        <h1>About Us</h1>
        <p>
          We are dedicated to building solutions that create a positive impact
          and inspire growth.
        </p>
      </div>

      {/* Mission / Vision / Values */}
      <section className="about-info-grid">
        <div className="about-card mission">
          <h2>Our Mission</h2>
          <p>
            To innovate and provide high-quality services that help people and
            organizations thrive.
          </p>
        </div>

        <div className="about-card vision">
          <h2>Our Vision</h2>
          <p>
            To be a trusted leader in delivering meaningful and lasting
            solutions.
          </p>
        </div>

        <div className="about-card values">
          <h2>Our Values</h2>
          <ul>
            <li>Innovation drives everything we do.</li>
            <li>Collaboration makes us stronger.</li>
            <li>Excellence is our standard.</li>
          </ul>
        </div>
      </section>

      {/* Floating bubbles */}
      <div className="floating-bubbles">
        <div className="bubble"></div>
        <div className="bubble"></div>
        <div className="bubble"></div>
        <div className="bubble"></div>
      </div>
    </div>
  );
}
