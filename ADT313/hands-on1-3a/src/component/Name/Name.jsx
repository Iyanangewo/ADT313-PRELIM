import './Name.css';


function Name({firstname, lastname}) {
    return(
        <div>    
            <h1 className='name'> <span className='text-red'>{firstname}</span>
            <span className='text-blue'>{lastname}</span></h1>
        </div>
    )
}


export default Name;