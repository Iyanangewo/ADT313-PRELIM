import './Section.css';


function Section({section}) {
    return(
        <div>           
            <h1 className='section'> <span className='text-yellow'>{section}</span></h1>
        </div>
    )
}


export default Section;