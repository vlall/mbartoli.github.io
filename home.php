<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mike Bartoli</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
  <!-- CSS -->
   <link rel="stylesheet" href="assets2/css/style.css" media="screen" type="text/css" />
   <link rel="stylesheet" href="assets2/css/style2.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="assets2/css/project.css" media="screen"type="text/css" />
  <link rel="stylesheet" href="assets2/css/bootstrap.min.css" media="screen"type="text/css" />
  <link rel="stylesheet" href="assets2/css/font-awesome.css" media="screen"type="text/css" />

  <!--JS-->
<script src='assets2/js/jquery.js'></script>

<!-- Tracking code -->

</head>

<body onload="start()">

<div id="header" class="bg1">
  <div id="topnav">
    <ul>
      <li><a href="http://karpathy.github.io/">blog</a></li>
    </ul>
  </div>
  <div id="headerblob">
    <img src="me.jpg" class="img-circle imgme">
    <div id="headertext">
      <div id="htname">Mike Bartoli</div>
      <div id="htdesc">Pomona College</div>
      <div id="htem">michael.bartoli _at_ pomona.edu</div>
      <div id="icons">
        <div class="svgico">
          <a href="https://twitter.com/karpathy"><img src="icons/03-twitter.svg"></a>
        </div>
        <div class="svgico">
          <a href="https://plus.google.com/+AndrejKarpathy/posts"><img src="icons/80-google-plus.svg"></a>
        </div>
        <div class="svgico">
          <a href="https://github.com/mbartoli"><img src="icons/octocat.svg" width="56px"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div id="timeline">
    <div class="timelineitem">
      <div class="tdate">Summer 2015</div>
      <div class="ttitle">Data Science Intern</div>
      <div class="tdesc">Data Tactics and DARPA</div>
    </div>
    <div class="timelineitem">
      <div class="tdate">Summer 2014</div>
      <div class="ttitle">SURE Research Fellow</div>
      <div class="tdesc">Keck Graduate Institute</div>
    </div>
    <div class="timelineitem">
      <div class="tdate">2014-Present</div>
      <div class="ttitle">Teaching Assistant</div>
      <div class="tdesc">Harvey Mudd, Pomona, and CMC</div>
    </div>
    <div class="timelineitem">
     <div class="tdate">2013-2014</div>
      <div class="ttitle">Data Science Consultant</div>
      <div class="tdesc">Eli-Lilly and KGI</div>
    </div>
    <div class="timelineitem">
      <div class="tdate">2013-Present</div>
      <div class="ttitle">Writing Fellow</div>
      <div class="tdesc">Pomona College Writing Center</div>
    </div>
    <div class="timelineitem">
      <div class="tdate">2012-Present</div>
      <div class="ttitle">Pomona College: Bachelor's Degree</div>
      <div class="tdesc">Major in Computer Science</div>
    </div>
  </div>
</div>

<div class="container quote">
  <blockquote>
  "I like my data large, my algorithms simple, and my labels weak."
  </blockquote>
</div>

<hr class="soft">

<div class="container">
  <h2>Publications</h2>
  <div id="pubs">

    <div class="pubwrap">
      <div class="row">
        <div class="col-md-6">
          <div class="pubimg">
            <img src="rnn/icon.jpg">
          </div>
        </div>
        <div class="col-md-6">
          <div class="pub">
            <div class="pubt">Visualizing and Understanding Recurrent Networks</div>
            <div class="pubd">Recurrent Neural Networks (RNNs), and specifically a variant with Long Short-Term Memory (LSTM), are enjoying renewed interest as a result of successful applications in a wide range of machine learning problems that involve sequential data. However, while LSTMs provide exceptional results in practice, the source of their performance and their limitations remain rather poorly understood. Using character-level language models as an interpretable testbed, we aim to bridge this gap by providing a comprehensive analysis of their representations, predictions and error types. In particular, our experiments reveal the existence of interpretable cells that keep track of long-range dependencies such as line lengths, quotes and brackets. Moreover, an extensive analysis with finite horizon n-gram models suggest that these dependencies are actively discovered and utilized by the networks. Finally, we provide detailed error analysis that suggests areas for further study.</div>
            <div class="puba">Andrej Karpathy*, Justin Johnson*, Li Fei-Fei</div>
            <div class="pubv">Arxiv 2015</div>
            <div class="publ">
              <ul>
                <li><a href="http://arxiv.org/abs/1506.02078">PDF</a></li>
								<li><a href="http://github.com/karpathy/char-rnn">Code (char-rnn)</a></li>
								<li><a href="http://karpathy.github.io/2015/05/21/rnn-effectiveness/">Blog Post</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    

      <div class="row">
        <div class="col-md-6">
          <div class="pubimg">
          <img src="rnn7.png">
          </div>
        </div>
        <div class="col-md-6">
          <div class="pub">
            <div class="pubt">Deep Visual-Semantic Alignments for Generating Image Descriptions</div>
            <div class="pubd">We present a model that generates free-form natural language descriptions of full images and their regions. For generating sentences about a given image region we describe a Multimodal Recurrent Neural Network architecture. For inferring the latent alignments between segments of sentences and regions of images we describe a model based on a novel combination of Convolutional Neural Networks over image regions, bidirectional Recurrent Neural Networks over sentences, and a structured objective that aligns the two modalities through a multimodal embedding. This work was also featured in a <a href="http://www.nytimes.com/2014/11/18/science/researchers-announce-breakthrough-in-content-recognition-software.html">New York Times article</a>.</div>
            <div class="puba">Andrej Karpathy, Li Fei-Fei</div>
            <div class="pubv">CVPR 2015 (Oral)</div>
            <div class="publ">
              <ul>
                <li><a href="cvpr2015.pdf">PDF</a></li>
                <li><a href="http://cs.stanford.edu/people/karpathy/deepimagesent/">Project</a></li>
                <li><a href="https://github.com/karpathy/neuraltalk">Code (Github)</a></li>
                <li><a href="http://cs.stanford.edu/people/karpathy/deepimagesent/rankingdemo">Retrieval demo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pubwrap">
      <div class="row">
        <div class="col-md-6">
          <div class="pubimg">
          <img src="mosaic_sm.jpg">
          </div>
        </div>
        <div class="col-md-6">
          <div class="pub">
            <div class="pubt">ImageNet Large Scale Visual Recognition Challenge</div>
            <div class="pubd">Everything you wanted to know about ILSVRC: data collection, results, trends over the years, current computer vision accuracy, even a stab at computer vision vs. human vision accuracy -- all here!</div>
            <div class="puba">Olga Russakovsky, Jia Deng, Hao Su, Jonathan Krause, Sanjeev Satheesh, Sean Ma, Zhiheng Huang, Andrej Karpathy, Aditya Khosla, Michael Bernstein, Alexander C. Berg, Li Fei-Fei</div>
            <div class="pubv">IJCV 2015</div>
            <div class="publ">
              <ul>
                <li><a href="http://arxiv.org/abs/1409.0575">PDF</a></li>
                <li><a href="http://karpathy.github.io/2014/09/02/what-i-learned-from-competing-against-a-convnet-on-imagenet/">Blog Post</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pubwrap">
      <div class="row">
        <div class="col-md-6">
          <div class="pubimg">
          <img src="img/fragimg3.png">
          </div>
        </div>
        <div class="col-md-6">
          <div class="pub">
            <div class="pubt">Deep Fragment Embeddings for Bidirectional Image-Sentence Mapping</div>
            <div class="pubd">We train a multi-modal embedding to associate fragments of images (objects) and sentences (noun and verb phrases) with a structured, max-margin objective. Our model enables efficient and interpretible retrieval of images from sentence descriptions (and vice versa).</div>
            <div class="puba">Andrej Karpathy, Armand Joulin, Li Fei-Fei</div>
            <div class="pubv">NIPS 2014</div>
            <div class="publ">
              <ul>
                <li><a href="nips2014.pdf">PDF</a></li>
                <li><a href="nips2014_supp.pdf">Supplemental</a></li>
                <li><a href="defrag/index.html">Code</a></li>
                <li><a href="http://cs.stanford.edu/people/karpathy/defragvis/">Web Demo of Results</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pubwrap">
      <div class="row">
        <div class="col-md-6">
          <div class="pubimg">
            <img src="img/videonets.png">
          </div>
        </div>
        <div class="col-md-6">
          <div class="pub">
            <div class="pubt">Large-Scale Video Classification with Convolutional Neural Networks</div>
            <div class="pubd">We introduce Sports-1M: a dataset of 1.1 million YouTube videos with 487 classes of Sport. This dataset allowed us to train large Convolutional Neural Networks that learn spatio-temporal features from video rather than single, static images.</div>
            <div class="puba">Andrej Karpathy, George Toderici, Sanketh Shetty, Thomas Leung, Rahul Sukthankar, Li Fei-Fei</div>
            <div class="pubv">CVPR 2014 (Oral)</div>
            <div class="publ">
              <ul>
                <li><a href="http://cs.stanford.edu/people/karpathy/deepvideo/">Project</a></li>
                <li><a href="http://cs.stanford.edu/people/karpathy/deepvideo/deepvideo_cvpr2014.pdf">PDF</a></li>
                <li><a href="http://cs.stanford.edu/people/karpathy/videobib.txt">Bibtex</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pubwrap">
      <div class="row">
        <div class="col-md-6">
          <div class="pubimg">
            <img src="img/rnn.png">
          </div>
        </div>
        <div class="col-md-6">
          <div class="pub">
            <div class="pubt">Grounded Compositional Semantics for Finding and Describing Images with Sentences</div>
            <div class="pubd"> Our model learns to associate images and sentences in a common 

              We use a Recursive Neural Network to compute representation for sentences and a Convolutional Neural Network for images. We then learn a model that associates images and sentences through a structured, max-margin objective. </div>
            <div class="puba">Richard Socher, Andrej Karpathy, Quoc V. Le, Christopher D. Manning, Andrew Y. Ng</div>
            <div class="pubv">TACL 2013</div>
            <div class="publ">
              <ul>
                <li><a href="http://nlp.stanford.edu/~socherr/SocherKarpathyLeManningNg_TACL2013.pdf">PDF</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pubwrap" style="border-bottom: none;">
      <div class="row">
        <div class="col-md-6">
          <div class="pubimg">
            <img src="img/discovernet.png">
          </div>
        </div>
        <div class="col-md-6">
          <div class="pub">
            <div class="pubt">Emergence of Object-Selective Features in Unsupervised Feature Learning</div>
            <div class="pubd">
              We introduce an unsupervised feature learning algorithm that is trained explicitly with k-means for simple cells and a form of agglomerative clustering for complex cells. When trained on a large dataset of YouTube frames, the algorithm automatically discovers semantic concepts, such as faces.
            </div>
            <div class="puba">Adam Coates, Andrej Karpathy, Andrew Ng</div>
            <div class="pubv">NIPS 2012</div>
            <div class="publ">
              <ul>
                <li><a href="http://cs.stanford.edu/people/karpathy/nips2012.pdf">PDF</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="showmore" id="showmorepubs">
    show more
    </div>

    <div id="morepubs">


      <div class="pubwrap">
        <div class="row">
          <div class="col-md-6">
            <div class="pubimg">
              <img src="img/discovery.jpg">
            </div>
          </div>
          <div class="col-md-6">
            <div class="pub">
              <div class="pubt">Object Discovery in 3D scenes via Shape Analysis</div>
              <div class="pubd">Wouldn't it be great if our robots could drive around our environments and autonomously discovered and learned about objects? In this work we introduce a simple object discovery method that takes as input a scene mesh and outputs a ranked set of segments of the mesh that are likely to constitute objects.</div>
              <div class="puba">Andrej Karpathy, Stephen Miller, Li Fei-Fei</div>
              <div class="pubv">ICRA 2013</div>
              <div class="publ">
                <ul>
                  <li><a href="http://cs.stanford.edu/~karpathy/discovery/">PDF, Code, Data</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pubwrap">
        <div class="row">
          <div class="col-md-6">
            <div class="pubimg">
              <img src="img/quadruped.png">
            </div>
          </div>
          <div class="col-md-6">
            <div class="pub">
              <div class="pubt">Locomotion Skills for Simulated Quadrupeds</div>
              <div class="pubd">We develop an integrated set of gaits and skills for a physics-based simulation of a quadruped. The controllers use a representation based on gait graphs, a dual leg frame model, a flexible spine model, and the extensive use of internal virtual forces applied via the Jacobian transpose.</div>
              <div class="puba">Stelian Coros, Andrej Karpathy, Benjamin Jones, Lionel Reveret, Michiel van de Panne</div>
              <div class="pubv">SIGGRAPH 2011</div>
              <div class="publ">
                <ul>
                  <li><a href="http://www.cs.ubc.ca/~van/papers/2011-TOG-quadruped/index.html">Project</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pubwrap" style="border-bottom: none;">
        <div class="row">
          <div class="col-md-6">
            <div class="pubimg">
              <img src="img/curriculum.png">
            </div>
          </div>
          <div class="col-md-6">
            <div class="pub">
              <div class="pubt">Curriculum Learning for Motor Skills </div>
              <div class="pubd">
                My UBC Master's thesis project. My work was on curriculum learning for motor skills. In particular, I was working with a heavily underactuated (single joint) footed acrobot. The acrobot used a devised curriculum to learn a large variety of parameterized motor skill policies, skill connectivites, and also hierarchical skills that depended on previously acquired skills. Almost all of it from scratch. The project was heavily influenced by intuitions about human development and learning (i.e. trial and error learning, the idea of gradually building skill competencies). The ideas in this work were good, but at the time I wasn't savvy enough to formulate them in a mathematically elaborate way. The video is a fun watch!
              </div>
              <div class="puba">Andrej Karpathy, Michiel van de Panne</div>
              <div class="pubv">AI 2012</div>
              <div class="publ">
                <ul>
                  <li><a href="http://www.cs.ubc.ca/~van/papers/2012-AI-curriculum/index.html">Project</a></li>
                  <li><a href="http://www.cs.ubc.ca/~van/papers/2012-AI-curriculum/2012-AI-curriculum.pdf">PDF</a></li>
                  <li><a href="http://vimeo.com/24446828">Video</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

<hr class="soft">

<div class="container">
  <h2>Pet Projects</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="pp">
        <a href="http://cs.stanford.edu/people/karpathy/convnetjs/">
        <img src="img/convnetlogo3.png" class="img-circle imgb">
        </a>
        <div class="ppt">ConvNetJS</div>
        <div class="ppd">
          ConvNetJS is Deep Learning / Neural Networks library written entirely in Javascript. This enables nice web-based demos that train Convolutional Neural Networks (or ordinary ones) entirely in the browser. Many web demos included. I did an interview with Data Science Weekly about the library and some of its back story <a href="http://www.datascienceweekly.org/data-scientist-interviews/training-deep-learning-models-browser-andrej-karpathy-interview">here</a>.
        </div>
        
        <!-- haha, taking this out :)
        <blockquote class="blockquote-reverse">
        <p><a href="https://plus.google.com/100209651993563042175/posts/Jef4gSR6rdX">"So cool!"</a></p>
        <footer>Yann LeCun</footer>
        </blockquote>
        -->

      </div>
    </div>
    <div class="col-md-4">
      <div class="pp">
        <a href="http://cs.stanford.edu/people/karpathy/reinforcejs/">
          <img src="img/mdpdp.jpeg" class="img-circle imgb">
        </a>
        <div class="ppt">REINFORCEjs</div>
        <div class="ppd">
           <a href="http://cs.stanford.edu/people/karpathy/reinforcejs/">REINFORCEjs</a> is a Reinforcement Learning library that implements several common RL algorithms supported with fun web demos. The library includes DP,TD,DQN algorithms and sketches of stochastic/deterministic Policy Gradients.
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="pp">
        <a href="https://github.com/karpathy/ulogme">
          <img src="img/ulogme.jpeg" class="img-circle imgb">
        </a>
        <div class="ppt">ulogme</div>
        <div class="ppd">
           ulogme tracks your active windows / keystroke frequencies / notes throughout the entire day and visualizes the results in beautiful d3js timelines. Check out my <a href="http://karpathy.github.io/2014/08/03/quantifying-productivity/">blog post introducing the project</a> to learn more.
        </div>
      </div>
    </div>
    



  </div>

  <div class="showmore" id="showmoreprojects">
    show more
  </div>

  <div id="moreprojects">
    <div class="row">
      <div class="col-md-3">
        <div class="pp">
          <a href="http://cs.stanford.edu/people/karpathy/nipspreview/">
            <img src="img/prettypapers.jpg" class="img-circle imgsm">
          </a>
          <div class="ppt">Pretty Accepted Papers</div>
          <div class="ppd">
            I was dissatisfied with the format that conferences use to announce the list of accepted papers (e.g. NIPS2012 <a href="http://papers.nips.cc/book/advances-in-neural-information-processing-systems-25-2012">here</a>). This led me to process the page into a <a href="http://cs.stanford.edu/people/karpathy/nipspreview/">much nicer and functional form</a>, with LDA topic analysis etc. The page became quite popular so I continued to make it for <a href="http://cs.stanford.edu/people/karpathy/nips2013/">NIPS 2013</a>, <a href="http://cs.stanford.edu/people/karpathy/cvpr2014papers/">CVPR 2014</a>, <a href="http://cs.stanford.edu/people/karpathy/nips2014/">NIPS2014</a>, <a href="http://cs.stanford.edu/people/karpathy/cvpr2015papers/">CVPR 2015</a>. Others have picked up the Github code and adapted it to <a href="http://benhamner.com/icml2013preview/#/">ICML 2013</a> and <a href="http://www.colinlea.com/guides/cvpr2013.html">CVPR 2013</a>.
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="pp">
          <a href="http://cs.stanford.edu/people/karpathy/researchlei/">
            <img src="img/lei.png" class="img-circle imgsm">
          </a>
          <div class="ppt">Research Lei</div>
          <div class="ppd">
          Research Lei is an Academic Papers Management and Discovery System. It helps researchers build, maintain, and explore academic literature more efficiently, in the browser. <span style="color:#900">(deprecated since Microsoft Academic Search API was shut down :( )</span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
      <div class="pp">
        <a href="http://bit.ly/scholaroctopus">
          <img src="img/scholaroctopus.jpg" class="img-circle imgsm">
        </a>
        <div class="ppt">ScholarOctopus</div>
        <div class="ppd">
          ScholarOctopus takes ~7000 papers from 34 ML/CV conferences (CVPR / NIPS / ICML / ICCV / ECCV / ICLR / BMVC) between 2006 and 2014 and visualizes them with t-SNE based on bigram tfidf vectors. In general, it should be much easier than it currently is to explore the academic literature, find related papers, etc. This hack is a small step in that direction at least for my bubble of related research.
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="pp">
          <a href="http://cs.stanford.edu/~karpathy/tsnejs/">
            <img src="img/tsnejslogo.jpg" class="img-circle imgsm">
          </a>
          <div class="ppt">tsnejs</div>
          <div class="ppd">
          tsnejs is a t-SNE visualization algorithm implementation in Javascript. I also computed an embedding for ImageNet validation images <a href="http://cs.stanford.edu/people/karpathy/cnnembed/">here</a>. Pretty! You can also use tsnejs to embed (almost) arbitrary CSV data in this <a href="http://cs.stanford.edu/people/karpathy/tsnejs/csvdemo.html">web interface</a>.
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="pp">
          <a href="https://github.com/karpathy/svmjs">
            <img src="img/svmjslogo.png" class="img-circle imgsm">
          </a>
          <div class="ppt">svmjs</div>
          <div class="ppd">
          svmjs is a Support Vector Machine solver implemented in Javascript. It uses the dual and SMO implementation, supports arbitrary kernels and comes with pretty <a href="http://cs.stanford.edu/~karpathy/svmjs/demo/">Canvas + HTML5 GUI</a> for visualizing the SVM. Related, I also write <a href="https://github.com/karpathy/forestjs">forestjs</a> which is a Random Forest library. These have been largely deprecated by ConvNetJS.
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="pp">
          <a href="http://badmephisto.com/iphone/">
            <img src="img/iphonepad.jpg" class="img-circle imgsm">
          </a>
          <div class="ppt">iOS apps</div>
          <div class="ppd">
            I'we written an <a href="http://badmephisto.com/iphone/">iOS app</a> that helps people access and remember Rubik's Cube algorithms. I've later also ported it to Android. I also published a 2-4 player iPad game called <a href="http://itunes.apple.com/us/app/loud-snakes/id523479541?mt=8">Loud Snakes</a>.
        </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="pp">
          <a href="http://cs.stanford.edu/people/karpathy/glass/">
            <img src="img/glass.jpg" class="img-circle imgsm">
          </a>
          <div class="ppt">Glass Winners</div>
          <div class="ppd">
            This page was a fun hack. Google was inviting people to become Glass explorers through Twitter (#ifihadclass) and I set out to document the winners of the mysterious process for fun. I didn't expect that it would go on to explode on internet and get me mentions in <a href="http://techcrunch.com/2013/03/31/glass-explorer-apps/">TechCrunch</a>, Verge, and many other places.
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="pp">
          <a href="https://www.youtube.com/watch?v=mSaO0Ul_55c">
            <img src="img/tetris.jpg" class="img-circle imgsm">
          </a>
          <div class="ppt">Tetris AI</div>
          <div class="ppd">
            I think I enjoy writing AIs for games more than I like playing games myself - Over the years I wrote several for World of Warcraft, Farmville, Chess, and <a href="https://www.youtube.com/watch?v=mSaO0Ul_55c">Tetris</a>. On somewhat related note, I also wrote a super-fun <a href="http://code.google.com/p/nplayertetris/">Multiplayer Co-op Tetris</a>.
          </div>
        </div>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="pp">
          <a href="http://cs.stanford.edu/people/karpathy/evenmore.html">
            <img src="img/circle.svg" class="img-circle imgsm">
          </a>
          <div class="ppt">even more</div>
          <div class="ppd">
            Even more various crappy projects I've worked on long time ago.
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<hr class="soft">

<div class="container">
  <h2>Teaching</h2>
  <div class="ctr">
    <div class="hht">Winter 2014-2015: Fei-Fei and I are instructors for <a href="http://vision.stanford.edu/teaching/cs231n/">CS231n: Convolutional Neural Networks for Visual Recognition</a></div>
    <a href="http://vision.stanford.edu/teaching/cs231n/">
      <img src="cs231nclass.png" id="img231n">
    </a>

  <div class="hht">
    <br>
  Also have a look at the <a href="http://cs231n.github.io/">class notes</a> (which took forever to write), and the lecture slides are available on the <a href="http://cs231n.stanford.edu/syllabus.html">course syllabus page</a>.
  </div>

  </div>
  
</div>

<hr class="soft">

<div class="container">

  <h2>Misc</h2>
  <div class="row">
    <div class="col-md-6">

      <div class="miscitem">
        <div class="miscimg">
          <img src="img/feed.png" class="img-circle">
        </div>
        <div class="miscd">
          My (mostly) <a href="http://karpathy.github.io/">Academic Blog</a>. I wish all researchers had one.
        </div>
      </div>

      <div class="miscitem">
        <div class="miscimg">
          <img src="img/circuit.png" class="img-circle">
        </div>
        <div class="miscd">
          <a href="http://karpathy.github.io/neuralnets/">Hacker's Guide to Neural Networks</a> is my attempt at explaining Neural Nets from "Hacker's perspective", relying more on code and physical intuitions than mathematics.
        </div>
      </div>

      <div class="miscitem">
        <div class="miscimg">
          <div class="colorrect img-circle"></div>
        </div>
        <div class="miscd">
          I helped create the Programming Assignments for Andrew Ng's <a href="http://www.ml-class.org/">CS229A (Machine Learning Online Class)</a> - this was the precursor to Coursera. At UBC I also TA'd <a href="http://www.cs.ubc.ca/~nando/540-2011/index.php">CPSC540</a> (Graduate Probabilistic Machine Learning) and three times UBC's <a href="http://www.ugrad.cs.ubc.ca/~cs121/current/Homepage/">CPSC 121</a> (Discrete Mathematics), where I taught at tutorials.
        </div>
      </div>

      <div class="miscitem">
        <div class="miscimg">
          <div class="colorrect img-circle"></div>
        </div>
        <div class="miscd">
          I like to go through classes on Coursera and Udacity. I usually look for courses that are taught by very good instructor on topics I know relatively little about. Last year I decided to also finish Genetics and Evolution (<a href="http://cs.stanford.edu/people/karpathy/geneticsacc.jpg">statement of accomplishmnet</a>) and Epigenetics (<a href="http://cs.stanford.edu/people/karpathy/epigenetics_cert.jpg">statement</a>, + <a href="http://cs.stanford.edu/people/karpathy/EpigeneticsCourseranotes.pdf">my rough notes</a>).
        </div>
      </div>


    </div>
    <div class="col-md-6">

      <div class="miscitem">
        <div class="miscimg">
          <img src="img/twitterblue.svg" class="img-circle">
        </div>
        <div class="miscd">
          Find me on <a href="http://twitter.com/#!/karpathy">Twitter</a>, <a href="https://github.com/karpathy">Github</a>, <a href="https://plus.google.com/100209651993563042175">Google+</a>, <a href="http://www.goodreads.com/user/show/13472185-andrej-karpathy">Goodreads</a>.
        </div>
      </div>

      <div class="miscitem">
        <div class="miscimg">
          <img src="img/cubevid.jpg" class="img-circle">
        </div>
        <div class="miscd">
          A long time ago I was really into Rubik's Cubes. I learned to solve them in about 17 seconds and then, frustrated by lack of learning resources, created <a href="https://www.youtube.com/user/badmephisto/featured">YouTube videos</a> explaining the Speedcubing methods. These went on to become quite popular with 6 million+ views by now. There's also my cubing page <a href="http://badmephisto.com/">badmephisto.com</a> that to this day still gets a few thousand views a day. Oh, and a video of me at a <a href="http://www.facebook.com/photo.php?v=715094857292&set=vb.28120513&type=2&theater">Rubik's cube competition</a> :)
        </div>
      </div>

      <div class="miscitem">
        <div class="miscimg">
          <div class="colorrect img-circle"></div>
        </div>
        <div class="miscd">
          <a href="http://cs.stanford.edu/people/karpathy/advice.html">Advice</a> for doing well in undergrad classes, for younglings.
        </div>
      </div>

      <div class="miscitem">
        <div class="miscd">
          <b>In press:</b><br>
          <div>
          - New York Times article on using deep networks for <a href="http://www.nytimes.com/2014/11/18/science/researchers-announce-breakthrough-in-content-recognition-software.html?_r=0">automatically captioning images with sentences</a>.
          </div>
          <div>
          - Wired article on my efforts to evaluate <a href="http://www.wired.com/2015/01/karpathy/">human accuracy on imagenet</a> and compare it to state of the art deep nets.
          </div>
          <div>
          - TechCrunch article on my <a href="http://techcrunch.com/2013/03/31/glass-explorer-apps/">Google Glass winners fun hack</a>.
          </div>
          
        </div>
      </div>

    </div>
  </div>

  <div id="misc">
    <div>Still more unsorted misc</div>
    <div class="umisc">- <a href="http://cs.stanford.edu/people/karpathy/cnnembed/">t-SNE visualization of CNN codes for ImageNet images</a></div>
    <div class="umisc">- <a href="http://cs.stanford.edu/people/karpathy/countdown/">Academic Countdown</a> was a site I mainted for a while that counted down to upcoming conference deadlines. It took too much time to maintain :) But the code is nice and people can use it to create their own countdowns.</div>
    <div class="umisc">- an efficient, <a href="https://gist.github.com/karpathy/587454dc0146a6ae21fc">batched Python/numpy implementation</a> of an LSTM forward and backward pass.
    </div>
    <div class="umisc">- a <a href="https://gist.github.com/karpathy/d4dee566867f8291f086"> Minimal character-level Recurrent Neural Network language model</a>, writted in Python/numpy. About 100 lines sufice! :)
    </div>

  </div>
<?php include ('embed-projects.php'); ?>

  <!--
  <div class="row">
    <div class="col-md-4">
      <div class="pp">
        <img src="img/cubevid.jpg" class="img-circle imgb">
        <div class="ppt">Rubik's Cube Tutorials</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="pp">
        <img src="img/octocat.svg" class="img-circle imgb">
        <div class="ppt">Github</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="pp">
        <img src="img/feed.png" class="imgb">
        <div class="ppt">Academic Blog</div>
      </div>
    </div>
  </div>
  -->
</div>

<div id="sitefooter">

</div>

<!-- place js at end for faster loading -->

    <!-- jQuery.. load later -->
        <script src="assets2/js/bootstrap.min.js"></script>
        <script src="assets2/js/mixitup.js"></script>
        <script src="assets2/js/teplok-one-page.js"></script>
</body>
</html>
