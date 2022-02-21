import React, { createContext } from "react";
import axios from 'axios';

export const UserContext = createContext();

class UserContextProvider extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      userdata: [],
    };
    this.readUser();
  }

  //create
  createUser(event, data){
    event.preventDefault();
    axios.post('/client/manager/create', data)
      .then(response => {
        console.log("data :",response.data.clientUser);
        let newData = [...this.state.userdata];
        const $respData = { id: response.data.clientUser.id, name: response.data.clientUser.username, password: response.data.clientUser.password, date: response.data.clientUser.date.date.split(" ")[0], role: response.data.clientUser.roles[0], status: response.data.clientUser.status ? "Active" : "Inactive" };
        newData.push($respData);
        this.setState({userdata: newData});
      })
      .catch(error => console.log(error));
    // console.log("event :", event);
    
  }
  //read
  readUser() {
    
    axios.get('/client/manager/read')
      .then(response => {
        let oldData = [...this.state.userdata];
        // console.log(response.data);
        let newData = [];
        
        newData = response.data.map((data) => {
          return { id: data.id, name: data.username, password: data.password, date: data.date.date.split(" ")[0], role: data.roles[0], status: data.status ? "Active" : "Inactive" };
        });
        // console.log(oldData);
        oldData.push(...newData);
        this.setState({userdata: oldData});
        // console.log(oldData);
      }).catch(error => {
        console.log(error);
      })
    // oldData.push(newData);
  }
  
  //update
  updateUser(data) {
    console.log("update", data);
    let newData = [...this.state.userdata];
    let dataFound =  newData.find(dat => {return dat.id === data.id});
    dataFound.name = data.name;
    dataFound.role = data.role;
    dataFound.password = data.password;

    this.setState([dataFound]);
    console.log("updated data", this.state.userdata);
  }
  //delete
  deleteUser(data) {
    let newData = [...this.state.userdata];
    let dataFound = newData.find(dat => {return dat.id === data.id});
    newData.splice(newData.indexOf(dataFound), 1);

    this.setState({userdata: newData});
    console.log(this.state.userdata);

  }

  render() {
    return (
      <UserContext.Provider
        value={{
          ...this.state,
          createUser: this.createUser.bind(this),
          updateUser: this.updateUser.bind(this),
          deleteUser: this.deleteUser.bind(this),
        }}
      >
        {this.props.children}
      </UserContext.Provider>
    );
  }
}
export default UserContextProvider;
