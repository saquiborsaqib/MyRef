/***********Document Object Model 
 * Created by the Browser
 * 'document' object
*/

/**********document Methods */

    //Select Element By CSS Selectors 
    document.querySelector('cssSelector');  //this return the reference to the element.
    document.querySelectorAll('cssSelector');   //this selects multiple element

    //Get an Element by ID
    document.getElementById('IDName');

    //Get an Element by Class Name
    document.getElementsByClassName('ClassName');

    //Get an Element by Tag Name
    document.getElementsByTagName('TagName');

/***********Elements  */
    //Properties
        element.innerText;  //this property holds the visible data inside the element
        element.textContent;    //this property holds the visible data and hidden data too.
        element.innerHTML;

    //Methods
        element.getAttribute('AttributeName');
        element.setAttribute('AttributeName','value');
