import React, { Fragment, useContext, useEffect, useState } from "react";
import { UserContext } from "../contexts/UserContext";
import {
  IconButton,
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableRow,
  TextField,
  FormControl,
  InputLabel,
  Input,
  InputAdornment,
} from "@material-ui/core";
import EditIcon from "@material-ui/icons/Edit";
import DeleteIcon from "@material-ui/icons/Delete";
import AddIcon from "@material-ui/icons/Add";
import DoneIcon from '@material-ui/icons/Done';
import CloseIcon from '@material-ui/icons/Close';
import ComboBox from "./ComboBox";
import InlineDatePicker from "./InlineDatePicker";
import DeleteDialog from "./DeleteDialog";
import { Visibility, VisibilityOff } from "@material-ui/icons";


function UserTable() {
  const context = useContext(UserContext);
  const status = [{ type: "Active" }, { type: "Inactive" }];
  const roles = [{ type: "vendeur" }, { type: "caissier" }];
  const [name, setName] = useState("");
  const [userRole, setUserRole] = useState("");
  const [userStatus, setUserStatus] = useState("");
  const [selectedDate, handleDateChange] = useState(new Date());
  const [editIsShown, setEditIsShown] = useState(false);
  const [editName, setEditName] = useState('');
  const [editRole, setEditRole] = useState('');
  const [editStatus, setEditStatus] = useState('');
  const [editDate, setEditDate] = useState(new Date());
  const [deleteDialogIsShown, setDeleteDialogIsShown] = useState(false);
  const [todeleteData, setTodeleteData] = useState(null);
  const [values, setValues] = useState({
    password: '',
    editPassword: '',
    showPassword: false
  });

  // console.log("current date", selectedDate);
  // console.log("current role", userRole);
  const handleChange = (val, event) => {
    val == 'Roles' ? setUserRole(event.target.textContent) : setUserStatus(event.target.textContent);
  };
  const handlEditChange = (val, event) => {
    val == 'Roles' ? setEditRole(event.target.textContent) : setEditStatus(event.target.textContent);
  };
  const handleChangePassword = (event) => {
    setValues({ ...values, password: event.target.value });
    console.log('password' ,values.password);
  };
  const handleEditChangePassword = (event) => {
    setValues({ ...values, editPassword: event.target.value });
    console.log('editpassword' ,values.editPassword);
  };
  const handleClickShowPassword = () => {
    setValues({
      ...values,
      showPassword: !values.showPassword,
    });
  };
  const handleMouseDownPassword = (event) => {
    event.preventDefault();
  };
  // useEffect(() => {
  //   console.log("Use effect :", userRole);
  // }, [userRole]);
  return (
    <Fragment>
      <form
        onSubmit={(event) => {
          context.createUser(event, { name: name, password: values.password, date: selectedDate.toISOString().split('T')[0], role: userRole, status: userStatus });
        }}
      >
        <Table>
          <TableHead>
            <TableRow>
              <TableCell align="right">#</TableCell>
              <TableCell>Name</TableCell>
              <TableCell>Password</TableCell>
              <TableCell>Date created</TableCell>
              <TableCell>Role</TableCell>
              <TableCell>Status</TableCell>
              <TableCell align="left">Actions</TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            <TableRow>
              <TableCell></TableCell>
              <TableCell>
                <TextField
                  label="Name"
                  value={name}
                  onChange={(event) => {
                    setName(event.target.value);
                  }}
                />
              </TableCell>
              <TableCell>
                <FormControl sx={{ m: 1, width: '25ch' }} variant="standard">
                  <InputLabel htmlFor="standard-adornment-password">Password</InputLabel>
                  <Input
                    id="standard-adornment-password"
                    type={values.showPassword ? 'text' : 'password'}
                    value={values.password}
                    onChange={handleChangePassword}
                    endAdornment={
                      <InputAdornment position="end">
                        <IconButton
                          aria-label="toggle password visibility"
                          onClick={handleClickShowPassword}
                          onMouseDown={handleMouseDownPassword}
                        >
                          {values.showPassword ? <VisibilityOff /> : <Visibility />}
                        </IconButton>
                      </InputAdornment>
                    }
                  />
                </FormControl>
              </TableCell>
              <TableCell>
                <InlineDatePicker
                  value={selectedDate}
                  onChange={handleDateChange}
                />
              </TableCell>
              <TableCell>
                <ComboBox
                  id={"1"}
                  choice={roles}
                  labell={"Roles"}
                  handleChange={handleChange}
                />
              </TableCell>
              <TableCell>
                <ComboBox
                  id={"2"}
                  choice={status}
                  labell={"Status"}
                  handleChange={handleChange}
                />
              </TableCell>
              <TableCell align="left">
                <IconButton type="submit">
                  <AddIcon label="Add"/>
                </IconButton>
              </TableCell>
            </TableRow>
            {context.userdata.slice().map((data, index) => (
              <TableRow key={index}>
                <TableCell align="right">{data.id}</TableCell>
                <TableCell>
                  {editIsShown === data.id ?
                    <TextField
                      label="Name"
                      value={editName}
                      onChange={(event) => {
                        setEditName(event.target.value);
                      }}
                      InputProps={{
                        endAdornment: <>
                          <IconButton onClick={() => {
                            context.updateUser({ id: data.id, name: editName, password: values.editPassword, date: new Date().toISOString().split('T')[0], role: editRole });
                            setEditName('');
                            setEditIsShown(false)
                          }}>
                            <DoneIcon />
                          </IconButton>
                          <IconButton onClick={() => { setEditIsShown(false) }}><CloseIcon /></IconButton>
                        </>
                      }}
                    /> : data.name}

                </TableCell>
                <TableCell>
                  {editIsShown === data.id ?
                    <FormControl sx={{ m: 1, width: '25ch' }} variant="standard">
                      <InputLabel htmlFor="standard-adornment-password">Password</InputLabel>
                      <Input
                        id="standard-adornment-password"
                        type={values.showPassword ? 'text' : 'password'}
                        value={values.editPassword}
                        onChange={handleEditChangePassword}
                        endAdornment={
                          <InputAdornment position="end">
                            <IconButton
                              aria-label="toggle password visibility"
                              onClick={handleClickShowPassword}
                              onMouseDown={handleMouseDownPassword}
                            >
                              {values.showPassword ? <VisibilityOff /> : <Visibility />}
                            </IconButton>
                          </InputAdornment>
                        }
                      />
                    </FormControl>
                    :
                    data.password
                  }
                </TableCell>
                <TableCell>{data.date}</TableCell>
                <TableCell>
                  {editIsShown === data.id ?
                    <ComboBox
                      choice={roles}
                      labell={"Roles"}
                      defaultVal={data.role.toString()}
                      handleChange={handlEditChange}
                      InputProps={
                        <>
                          <IconButton><DoneIcon /></IconButton>
                          <IconButton><CloseIcon /></IconButton>
                        </>
                      }
                    />
                    : data.role
                  }

                </TableCell>
                <TableCell>{data.status}</TableCell>
                <TableCell align="left">
                  <IconButton onClick={() => {
                    setEditIsShown(data.id);
                    setEditName(data.name);
                    setValues({...values, editPassword: data.password});
                    setEditRole(data.role);
                    }} 
                  >
                    <EditIcon />
                  </IconButton>
                  <IconButton onClick={() => { setDeleteDialogIsShown(true); setTodeleteData(data) }}>
                    <DeleteIcon />
                  </IconButton>
                </TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </form>
      {deleteDialogIsShown && (
          <DeleteDialog 
            data={todeleteData} 
            open={deleteDialogIsShown} 
            setDeleteDialogIsShown={setDeleteDialogIsShown} 
          />
        )
      }
      
    </Fragment>
  );
}

export default UserTable;