function userExist() {
  $('#profile-username').text(localStorage.getItem('username'));
  $('.navbar__button').hide();
  $('.profile').show();
}

$(document).ready(() => {
  if (localStorage.getItem('username')) {
    userExist();
  }

  $('.profile-logout button').on('click', () => {
    localStorage.removeItem('username');
    $('.navbar__button').show();
    $('.profile').hide();
    $('.profile-logout').hide();
  });

  $('#profile-username').on('click', () => {
    $('.profile-logout').toggle();
  });

  $('.profile-logout').hide();
});
