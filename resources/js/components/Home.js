import React from "react";
import { Link } from "react-router-dom";

export default function Home() {
    return (
        <div className="home-page">
            <div className="home-hero">
                <h1>Welcome</h1>
                <p>To Malunggay Management System</p>
                <Link className="hero-btn" to="/login">Continue</Link>
            </div>
        </div>
    );
}