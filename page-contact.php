<?php get_header(); ?>
<div class='contact-container'>
    <form class='contact-form' onSubmit="#">
    <h3 class='contact-header'>Contact Me</h3>
      <div class='contact-info'>
        <p class='contact-details'>Kristen Harper</p>
        <p class='contact-details'>903-780-9969</p>
      </div>
    <h3 class='contact-header'>or fill out this form</h3>
      <div class='row'>
        </div>
        <label class='label' >Name:</label>
        <input
          class='input'
          name='name'
          type='text'
          placeholder='Name'
        />
      </div>
      <div class='row'>
        <label class='label' htmlFor='email'>Email:</label>
        <input
          class='input'
          name='email'
          type='text'
          placeholder='Email'
        />
      </div>
      <div class='row'>
        <label class='label' >Subject:</label>
        <input
          class='input'
          name='subject'
          type='text'
          placeholder='Subject'
        />
      </div>
      <div class='row'>
        <label class='label' >Message:</label>
        <!-- <textarea
          class='big-input'
          name='message'
          type='text'
        /> -->
      </div>
      
      <div class='contact-submit-container'>
        <button class='contact-button' type='submit'>Submit</button>
      </div>
    </form>
    
  </div> 

<?php get_footer(); ?>