import React, { useContext } from 'react';
import { Button, Dialog, DialogActions, DialogContent, DialogTitle } from '@material-ui/core';
import PropTypes from 'prop-types';
import { UserContext } from '../contexts/UserContext';

function DeleteDialog(props) {
    const context = useContext(UserContext);
    const hide = () => {
        props.setDeleteDialogIsShown(false);
    };
    return ( 
        <Dialog onClose={hide} fullWidth={true} maxWidth='sm' open={props.open}>
            <DialogTitle>Do you really want to delete?</DialogTitle>
            <DialogContent>
                {props.data.name}
            </DialogContent>
            <DialogActions>
                <Button onClick={hide}>Cancel</Button>
                <Button onClick={() => {context.deleteUser({id: props.data.id}); hide()}}>
                    Delete
                </Button>
            </DialogActions>
        </Dialog>
     );
}

DeleteDialog.propTypes = {
    open: PropTypes.bool.isRequired,
    setDeleteDialogIsShown: PropTypes.func.isRequired,
    data: PropTypes.object
}
export default DeleteDialog;