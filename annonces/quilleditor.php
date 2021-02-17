<!-- Include stylesheet -->
<link href="quill.snow.css" rel="stylesheet">

<div id="toolbar" style="width: 100%;"></div>
<!-- Create the editor container -->
<div id="editor" style="width: 100%;height: 300px;">
 
</div>

<!-- Include the Quill library -->
<script src="quill.js"></script>
<link rel="stylesheet" href="default.min.css">
<script src="highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();hljs.configure({   // optionally configure hljs
  languages: ['javascript', 'ruby', 'python']
});</script>

<!-- Initialize Quill editor -->
<script>
 let toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],

  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }],

  ['clean'],                                        // remove formatting button
  ['link', 'image']
];


  let quill = new Quill('#editor', 
  {
    modules: 
    {
      'history': 
      {          // Enable with custom configurations
      'delay': 2500,
      'userOnly': true
      },

      toolbar: toolbarOptions
    },
    theme: 'snow'
  });

</script>