import React, { useEffect, useState } from 'react';

import categoriaServices from "../../services/categoria"

function CategoriaEdit(props){

  const [ id, setId ] = useState(null);
  const [ name, setName ] = useState("");

  useEffect(()=>{

    async function fetchData(){
      let id = props.match.params.id;
      const res = await categoriaServices.get(id);

      if (res.success) {
        console.log(res);
        const data = res.data
        setId(data.id)
        setName(data.name)
      }
      else {
        alert(res.message)
      }
    }
    fetchData();

  },[]);

  const update = async () => {
    const data = {
      id, name
    }

    const res = await categoriaServices.update(data);

    if (res.success) {
      alert(res.message)
    }
    else {
      alert(res.message)
    }
  }


  return (
    <div>
      <h4>Edit </h4>
      <hr/>
      <div className="row">
        <div className="col-md-6 mb-3">
          <label htmlFor="firstName">Name</label>
          <input type="text" className="form-control" value={name}
          onChange={(event)=>setName(event.target.value)} />
        </div>
      </div>

      <div className="row">
        <div className="col-md-6 mb-3">
          <button onClick={()=>update()}
          className="btn btn-primary btn-block" type="submit">Save</button>
        </div>
      </div>
    </div>
  )

}

export default CategoriaEdit;
