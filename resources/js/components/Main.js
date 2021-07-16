import React, {Component} from "react"
import ReactDOM from "react-dom"

import Nav from "./Nav"

import CategoriaIndex from "./categoria/CategoriaIndex"
import CategoriaCreate from "./categoria/CategoriaCreate"
import CategoriaEdit from "./categoria/CategoriaEdit"

// import Form from "./employee/Form"
// import Edit from "./employee/Edit"
// import List from "./employee/List"

import {
    BrowserRouter as Router,
    Switch,
    Route
} from "react-router-dom"

function Main() {
    return (
        <Router>
            <main>
                <Nav/>
                <Switch>
                    <Route path="/categoria" exact component={CategoriaIndex} />
                    <Route path="/categoria/index" component={CategoriaIndex} />
                    <Route path="/categoria/create"  component={CategoriaCreate} />
                    <Route path="/categoria/edit/:id"  component={CategoriaEdit} />

           
                </Switch>
            </main>
        </Router>
    )
}

export default Main
ReactDOM.render(<Main />, document.getElementById("container-react"))