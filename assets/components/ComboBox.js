/* eslint-disable no-use-before-define */
import React from "react";
import TextField from "@material-ui/core/TextField";
import Autocomplete from "@material-ui/lab/Autocomplete";

export default function ComboBox({ id, choice, labell, handleChange, InputProps, defaultVal }) {
  return (
    <Autocomplete
      id={id}
      options={choice}
      defaultValue={{ type: defaultVal }}
      getOptionLabel={(option) => option.type ? option.type : ""}
      getOptionSelected={(option) => option.type}
      style={{ width: 300 }}
      renderInput={(params) => (
        <TextField 
          {...params} 
          label={labell} 
          variant="outlined" 
          InputProps={{
            ...params.InputProps,
            endAdornment: (
              <>
                {InputProps}
                {params.InputProps.endAdornment}
              </>
            )
          }}
        />
      )}
      onChange={() => handleChange(labell, event)}
    />
  );
}
