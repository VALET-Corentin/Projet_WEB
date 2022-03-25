<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>offerPage</title>
</head>
<body>
  <main class="container">
    <div class="row" style="margin:3%;">
      <img class="col-3" style="width:100%; max-width: 200px;" src="data:image/png;base64,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" alt="">
      <article class="col-9">
        <h3 style="text-align:center;">Devops full-stack back-end data . INTEL</h3>
        <p>Informatique</p>
        <p>Poitou-Charentes</p>
        <p>4 mois</p>
      </article>
    </div>
    <div class=" row"style="margin:3%; background-color:lightgrey;">
      <img class="col-3" style="width:100%; max-width: 200px; padding:0;" src="data:image/png;base64,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" alt="">
      <article class="col-9">
        <h3>Devops full-stack back-end data . INTEL</h3>
        <p>Informatique</p>
        <p>Poitou-Charentes</p>
        <p>4 mois</p>
      </article>
    </div>
    <div class=" row"style="margin:3%;">
      <img class="col-3" style="width:100%; max-width: 200px;" src="data:image/png;base64,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" alt="">
      <article class="col-9">
        <h3>Devops full-stack back-end data . INTEL</h3>
        <p>Informatique</p>
        <p>Poitou-Charentes</p>
        <p>4 mois</p>
      </article>
    </div>
    <div class=" row"style="margin:3%;">
      <img class="col-3" style="width:100%; max-width: 200px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAABPCAMAAADmzqp4AAAAb1BMVEX///8IYKgAXqcAV6QAW6YAVaMAUqIAWaU5crDG0+X3+fxpj8CTrM50msVhiby0xd2nvdgATqBKfbjv8/jf5/EAS5+httTO2ujm7PR9n8lwlMLZ4u6/zeEzba4ASJ6astKJpsxVhLohZqsARJ0AP5uZEbZVAAAGqElEQVRogb2a2YKiOhCG2ywVCAoEZIdmmfP+z3iyEEUFAXGmbtpmyUcqlb8qgZ+fg8bzrA7bovT7yFEW+WXXhm4VH2140fIsLPqGCaCYEYIQOkmTfwhhFAQd+i64fpuZhV6DgDJiaHOGJJ42XsC/xazSHoBaouwfwxSoNd3729MggkUUHkfH9WUQmOhmlTvp4ERe1waum2VVVWWZWwdt4UcDBUwsm9IyOwLlgYdAMWUvQAx+F2b5Qld47raefMLRJwT6j8mux6RzZRuUMj91t8TrNYyAGrQk5x9A8/NJ9lQxZaTsidI4iKhxOEnOe6mZR6l6ZOynH8yMrARDps6uu2uHMtlT8OpP4zL3hYlEWm++JxhAQpG3/Y45yxqsA0yk266vHUAMouC46hWgfQ3thmuzCKR/i++oXWB8DcHahbknGG3Cr0CVZbrHCFZmMpea17tfo0pztYyg4X148j+fa8yChbrHtHjP/TZVWskUOPl6elwzbqax/1ch1zaVZuLSDUykaE8jNifVqadsNdrXzf3FGNNG47pLaFpsVI/p3CQuKCEEdmv4DFf3zZG/eNi5qVGqFtuDL1w19uw9N1a2lHtnuZfK9DHXeglP+sc3cj0m6ze6MhZ37k9QcCvw2tHwoAu82cwl+7g/VWjnTqFyIpumh9gBxb0kAPC7xlXRsYN7t4CqmTSRDu4wzc2vyt4noANcrdJoMoMdsilHHeVehQqs+1Gf4XIr9jAXDfbfjqLGzAs3VGbEOZxacBdszSUXddROpjgoIyfqz/eL5rmV7m8z/leLE1Tm50XIql906idPMJ0asQOhubJckiWtCQR+oWoFoQrryEbuPNedjm9MEe3GE5N5xPHTmgeiKVeb5rqM3dZJxFYU89wQT+K5l+3YExfVJp7n2tz5xHXFdHWGhPuGq29lxnEBTMqeVy5myjQK4XziZyZXELHVPrkYgbFQxnyZO2i/afHiD6dfuEjns7TXOZuGNy4p1WFuvCWTW+Fes0IvS1ixyM3oXZ/PdGxulovYGLKlgd24dh6Zeu1kwrLWt6B4iXth94Mg4/CeWxa5tVY4/4WrmwJb1+tSRp+a48Z6Zcw69VumxKle7uYyvTJ9cCTxFriddjPVvpGZSUxquL3cPLEgY+oq1Mxzc1NCR+MDIjQ5t5c7Nl9cjBW6RlYRPcPVETiOidQJUh7ghuMssqaDLJnlptrLozhLNz8o/GfcJ/ud42Zm7W+KjVzqtLge5iI2NfzfDPdqHpCZUKhB+ig+wNUFBIra89S6nxduTsaNNQNr2dPY7+XqxEZmcvcjNxv3duxyUGJQdITLE92NFW5IzcDfapoePa1XduuG81SZ2kGbcGMfxt7eBMr5hKuvsSI3zo5buv9tX7hszJt37M8guf2U2+F1rl5tSJmt65r/xCZDsvM15nlWAhIGfE0sl59MSJkq5sZ9HF8dnyvcSo/pCQNg6dXUqB+mw4B0Bh5XVyqSJlwE0z2LRqnpdKUTq8tXuKPgKe1Ro+nfpGPcjzSC0MKEi+jwsNyO5KX0oUpvxTo3H2ylo2/1YSpWN0IvM6zhntjzykdl88dl0k8nCDVcVSMSbLmyFcTGGMyjhGk1No8cErCygEVxc1+LE5WZOBOX56X2WeZp3D0eqwqTmbkTKRubcfV/t4iszl7f9/54koe9HG2g1GmnzuOZGlPevS7wVRih5uXwJxbnK8uqqWmZE9VXwHuMq4pnUi78M/O15v3zLSWj2I+S9V1b2H8zeXF9m/RDq5ylLul6HMFf8fS1B7YUO7kwE/6T9x3vLfMT8iZmSy2vpPkyeHyTssyNx1c85IuzOO+IfXO0PEfrUdbFlzbX46BPmM0S77ShsNVPfzy6eO0huK/L32tSND4eocWhVyc88AklD+9m3+82W/CJwUvK2sqs2ih5gqrtjrdbf7yn9kom+t3vi3gV+rfXnw9Ub23kPDHZkkF9uzm4r3UXnSglz0zZg99yQ7yk+H6r2oiC/ly/3WPmuZsWjkz27KWfOlRO3Ta3VQ48RgSGhDj+5RzWWVZdc2XXqsrcID0XXtTQBPDzcNrnxtDveLPf0uchGj9PUBUM1kap/v32iwImhnZfcPKCsqXmNhlSZXT3gfDl3QkWe7IGJcCi7QH5ZHEYzcyIdSYVzaU+llvyc3P/QmOVKIOfQlMEX8lncVA2bDFeR6CabvTUeGn2ta9SlOVuW0YnUF/gqLWB+gRHxTdROxggBB6i8lz/rS+AeFzVasKWnh85TtR73qU7p4Fbrb23emv/Aw9hY87gniHeAAAAAElFTkSuQmCC" alt="">
      <article class="col-9">
        <h3>Devops full-stack back-end data . INTEL</h3>
        <p>Informatique</p>
        <p>Poitou-Charentes</p>
        <p>4 mois</p>
      </article>
    </div>


  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>