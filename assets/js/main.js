const $button  = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');
const activePage = window.location.pathname;
const $pageLink = document.querySelectorAll ('aside .pageLink a');
const $collapsible = document.querySelectorAll ('.collapsible a');

//Collapsed sidebar
$button.addEventListener('click', (e) => {
e.preventDefault();
$wrapper.classList.toggle('toggled');
});

// Pointing active link to the current element
  $pageLink.forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
        console.log(link);
    }
  })

  function myFunction(e) {
    // var elems = document.querySelectorAll(".active");
    [].forEach.call($pageLink, function(el) {
      el.classList.remove("active");
    });
    e.target.$collapsible = "active";
  }


  //if  the paernt link in collapsible is clicked, mareremove dapat yung active naka point sa isang link then mamomove sya sa collapsible link /parent link
//   $collapsible.forEach(function(collapsible){
//     collapsible.addEventListener("click", function(){
//         collapsible.classList.toggle("active");
//     });
//   });

// $(document).ready(function(){
//     $('.openCreateCollegeModal').on('click',function(){
//         var dataURL = $(this).attr('data-href');
//         $('.modal-body').load(dataURL,function(){
//             $('#createCollegeModal').modal({show:true});
//         });
//     }); 
// });

