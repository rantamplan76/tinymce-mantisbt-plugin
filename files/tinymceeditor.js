/** Indicate the IDs on which we are going to activate the plugin */
mceSelector = ['#description',]

mceSelector.forEach(element => {
    tinymce.init({
        selector: element,
    });
});


const tmeCurrentPage = window.location.pathname;

/* TODO:
- Add other pages with required fields
- Develop a better (most elegant) way to skip the required field error on TinyMCE
*/

// Hack to skip the required description field on bug_report_page
/**  Write a point '.' in the hidden description field to skip the required error 
 * that is overwrite by tinyMCE plugin when bug report form is sent.
*/
if (tmeCurrentPage.includes("/bug_report_page.php")) {
    const mceDescription = document.getElementById('description');
    mceFocusOutField = document.getElementById('summary')
    mceFocusOutField.addEventListener('focusout', () => {
        mceDescription.innerText = '.';
    })
}

/** TODO: ¡¡¡Comprobar si el campo descxripción esta en blanco **/

// const formulario = document.getElementById('report_bug_form')
// const descripcion = document.getElementById('description');
// formulario.addEventListener('submit', (e) => {
//     console.log('hemos llegado a prevent')
//     e.preventDefault();
//     descripcion.innerText = '.';
//     formulario.submit()
//   })

