<head>
    <title>BAMHUB</title>
    <style>
        .grid {
	padding: 20px 20px 100px 20px;
	max-width: 1300px;
	margin: 0 auto;
	list-style: none;
	text-align: center;
}

.grid li {
	display: inline-block;
	width: 440px;
	margin: 0;
	padding: 20px;
	text-align: left;
	position: relative;
}

.cs-style-4 li {
	perspective: 1700px;
	perspective-origin: 0 50%;
}

.cs-style-4 figure {
	transform-style: preserve-3d;
}

.cs-style-4 figure > div {
	overflow: hidden;
}

.cs-style-4 figure img {
	transition: transform 0.4s;
}

.no-touch .cs-style-4 figure:hover img,
.cs-style-4 figure.cs-hover img {
	transform: translateX(25%);
}

.cs-style-4 figcaption {
	height: 100%;
	width: 50%;
	opacity: 0;
	backface-visibility: hidden;
	transform-origin: 0 0;
	transform: rotateY(-90deg);
	transition: transform 0.4s, opacity 0.1s 0.3s;
}

.no-touch .cs-style-4 figure:hover figcaption,
.cs-style-4 figure.cs-hover figcaption {
	opacity: 1;
	transform: rotateY(0deg);
	transition: transform 0.4s, opacity 0.1s;
}

.cs-style-4 figcaption a {
	position: absolute;
	bottom: 20px;
	right: 20px;
}

@media screen and (max-width: 31.5em) {
	.grid {
		padding: 10px 10px 100px 10px;
	}
	.grid li {
		width: 100%;
		min-width: 300px;
	}
}
    </style>
</head>

<body>
    
    <ul class="grid cs-style-4">
	<li>
		<figure>
			<img src="img2.jpg" alt="img01">
			<figcaption>
				<h3>Camera</h3>
				<span>Jacob Cummings</span>
				<a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
			</figcaption>
		</figure>
	</li>
	<li>
	    <li>
		<figure>
			<img src="img2.jpg" alt="img01">
			<figcaption>
				<h3>Camera</h3>
				<span>Jacob Cummings</span>
				<a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
			</figcaption>
		</figure>
	</li>
	<li>
	
</ul>
    
</body>