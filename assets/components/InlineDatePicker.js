import React, { Fragment, useState } from "react";
import DateFnsUtils from "@date-io/date-fns";
import { DatePicker, MuiPickersUtilsProvider } from "@material-ui/pickers";

function InlineDatePicker(props) {
  return (
    <MuiPickersUtilsProvider utils={DateFnsUtils}>
      <DatePicker
        variant="inline"
        label="Choose Date"
        value={props.value}
        onChange={props.onChange}
      />
    </MuiPickersUtilsProvider>
  );
}

export default InlineDatePicker;
