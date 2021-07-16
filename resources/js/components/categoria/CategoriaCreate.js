import React, { useEffect, useState  } from 'react';

import categoriaServices from "../../services/categoria"

function CategoriaCreate(){

  const [ name, setName ] = useState(null);
  const [ created_at, setCreated_at ] = useState(null);

  // useEffect(() => {
  //   async function fetchDataRol() {
  //     // load data from API
  //     const res = await categoriaServices.index();
  //     setListRol(res.data)
  //   }
  //   fetchDataRol();
  // },[]);

  const save = async () => {

    // validar no obtiene la fecha actual
    setCreated_at(new Date().toLocaleString('en-US', { hour12: false}))

    const data = {
      name,
      created_at
    }
    const res = await categoriaServices.save(data);

    if (res.success) {
      alert(res.message)
    }
    else {
      alert(res.message)
    }
  }

  return(
    <div>
      <div className="row">
        <div className="col-md-6 mb-3">
          <label htmlFor="name">Name employee </label>
          <input type="text" className="form-control" placeholder="Name"
            onChange={(event)=>setName(event.target.value)} />
        </div>
      </div>

     

      <div className="row">
        <div className="col-md-6 mb-3">
          <button className="btn btn-primary btn-block" type="submit"
          onClick={()=>save()}>Save 2</button>
        </div>
      </div>
    </div>
  )
}

export default CategoriaCreate;

