import React from "react";
import ReactDom from "react-dom";
import "./styles/app.css";
import "./bootstrap";
import UserContextProvider from "./contexts/UserContext";
import UserTable from "./components/userTable";
import HeaderComponent from "./components/HeaderComponent";
import { CssBaseline } from "@material-ui/core";

class App extends React.Component {
  render() {
    return (
      <>
        <UserContextProvider>
          <CssBaseline>
            <UserTable />
          </CssBaseline>
        </UserContextProvider>
      </>
    );
  }
}
ReactDom.render(<App />, document.getElementById("root"));
