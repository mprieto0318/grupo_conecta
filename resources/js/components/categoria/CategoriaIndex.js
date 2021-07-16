import React, { useEffect, useState } from 'react';

import categoriaServices from "../../services/categoria"

import { Link } from "react-router-dom";

function CategoriaIndex(){

  const [ list, setList ] = useState([]);

  useEffect(()=>{

    async function fetchData(){
      const res = await categoriaServices.index();
      console.log(res.data);
      setList(res.data)
    }

    fetchData();

  },[])


  const onClickDelete = async (i,id) => {

    var yes = confirm("are you sure to delete this item?");
    if (yes === true){

      const res = await categoriaServices.delete(id)

      if (res.success) {

        const filtredData = list.filter(item => item.id !== id)
        setList(filtredData)
        alert(res.message) 
      }
      else{
        alert(res.message);
      }
    }
  }

  return (
    <section>
      <table className="table">
        <thead className="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        {
          list.map((item, i)=>{
            return(
              <tr key={i}>
                <th scope="row">{i}</th>
                <td>{item.name}</td>
                <td>
                  <Link className="btn btn-outline-info" to={"/categoria/edit/"+item.id}>Edit</Link>
                  <a href="#" className="btn btn-danger" onClick={()=>onClickDelete(i,item.id)}> Delete </a>
                </td>
              </tr>
            )
          })
        }
        
        </tbody>
      </table>
    </section>
  )
}

export default CategoriaIndex;

