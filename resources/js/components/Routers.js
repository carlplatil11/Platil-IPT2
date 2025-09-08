import React from "react";
import { BrowserRouter as Router, Route, Routes} from "react-router-dom"
import ReactDom from "react-dom";
import example from "./Example";

export default function Routers() {
    return (
        <Router>
            <Routes>
                <Route path="/Example" element={<example />} />
                <Routere path="/Home" element={<Home />} />
            </Routes>
        </Router>
    )
}