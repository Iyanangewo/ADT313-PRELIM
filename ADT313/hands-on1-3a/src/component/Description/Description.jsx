import './Description.css';


function Description({description}) {
    return(
        <div>           
                 <h1 className='description'> <span className='text-cyan'>{description}</span></h1>
        </div>
    )
}


export default Description;