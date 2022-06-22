const vm = new Vue({
	el: "#section",
	data: {
		timeline: [
      {
				date: "1 February – 13 March 2022",
				description:
					"Preliminary Round Registration",
			},
      {
				date: "20 February 2022",
				description:
					"Guidebook & Case Release",
			},
      {
				date: "20 February – 13 March 2022",
				description:
					"Open Registration & Abstract Submission",
			},
			{
				date: "13 March 2022",
				description:
					"Abstract Submission Due Date",
			},
      {
				date: "20 March 2022",
				description:
					"Selected Abstract Announcement",
			},
      {
				date: "13 April 2022",
				description:
					"Full Paper Submission Due Date",
			},
      {
				date: "3 April 2022",
				description:
					"Workshop",
			},
      {
				date: "28 April 2022",
				description:
					"Finalists Announcement (Top 10)",
			},
		{
				date: "30 April 2022",
				description:
					"Technical Meeting for Climate Innovators Camp",
			},
      {
				date: "1 May 2022 - 22 May 2022",
				description:
					"Climate Innovators Camp (mentoring program)",
			},
      {
				date: "22 May 2022",
				description:
					"Prototype Video Pitch Submission Due Date (Pre-Recorded)",
			},
      {
				date: "2 June 2022",
				description:
					"PowerPoint Submission Due Date",
			},
      {
				date: "5 June 2022",
				description:
					"Final Presentation Day	",
			},
      {
				date: "12 June 2022",
				description:
					"Awarding Day",
			},      
		],
		pertanyaan: [
			{
				id: "headingOne",
				question: "Where will the workshop, mentoring program, and final presentation be held?",
				dataBsTarget: "#collapseOne",
				ariaControls: "collapseOne",
				ariaExpanded: "true",
				collapsed: "",
				show: "show",
				answer:
					"All the activities will be held online through Zoom Meeting Platform",
			},
			{
				id: "headingTwo",
				question: "I’ve already registered, but it turns out I had input the wrong data on the form. What should we do?",
				dataBsTarget: "#collapseTwo",
				ariaControls: "collapseTwo",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer:
					"Please kindly participants can inform the contact person",
			},
			{
				id: "headingThree",
				question: "When will we get the confirmation email?",
				dataBsTarget: "#collapseThree",
				ariaControls: "collapseThree",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer:
					"The confirmation email will be sent to the registered email maximum 2x24 hours since registration done",
			},
			{
				id: "headingFour",
				question: "Where will we can see the RE Innovation Brainstorm Competition terms & conditions?",
				dataBsTarget: "#collapseFour",
				ariaControls: "collapseFour",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer: "All terms & conditions are in the Guidebook https://bit.ly/GuidebookREIB2022",
			},
			{
				id: "headingFive",
				question: "Do we have to follow Official Account @futurest2022 and post twibbon on our Instagram?",
				dataBsTarget: "#collapseFive",
				ariaControls: "collapseFive",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer: "YES YOU MUST! All terms & conditions must be followed by all participants",
			},
		],
	},
});
