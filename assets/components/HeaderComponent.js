import React from "react";

function HeaderComponent() {
  return (
    <div className="container-xl">
      <div className="table-responsive">
        <div className="table-wrapper">
          <div className="table-title">
            <div className="row">
              <div className="col-sm-5">
                <h2>
                  User <b>Management</b>
                </h2>
              </div>
              <div className="col-sm-7">
                <a
                  data-toggle="modal"
                  data-target="#exampleModal"
                  href="#exampleModal"
                  className="btn btn-secondary"
                >
                  <i className="material-icons">&#xE147;</i>{" "}
                  <span>Add New User</span>
                </a>
                <a
                  href="{{ path('client_manager_index') }}"
                  className="btn btn-secondary me"
                >
                  <i className="material-icons">&#xE24D;</i>{" "}
                  <span>Export to Excel</span>
                </a>
              </div>
            </div>
          </div>
          <table className="table table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Date Created</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  );
}

export default HeaderComponent;
