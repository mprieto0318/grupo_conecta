import axios from "axios"

const baseUrl = "http://127.0.0.1:8000/api/categoria"
const categoria = {}

categoria.index = async () => {
    const url = baseUrl + "/index"
    const res = await axios.get(url)
        .then(response => { return response.data })
        .catch(error => { return error})

    return res
}


categoria.save = async (data) => {
    const url= baseUrl+"/create"
    const res = await axios.post(url,data)
    .then(response=> {return response.data })
    .catch(error=>{ return error; })
    return res;
  }

  categoria.get = async (id) => {

    const url = baseUrl+"/get/"+id
    const res = await axios.get(url)
    .then(response=>{ return response.data })
    .catch(error => { return error })
    return res;
  
  }

  categoria.update = async (data) => {
    const url = baseUrl+"/update/"+data.id
    const res = await axios.put(url,data)
    .then(response=>{ return response.data; })
    .catch(error =>{ return error; })
    return res;
  }

  categoria.delete = async (id) => {
    const url = baseUrl+"/delete/"+id
    const res = await axios.delete(url)
    .then(response=> { return response.data })
    .catch(error =>{ return error })
    return res;
  }

  
  
export default categoria

