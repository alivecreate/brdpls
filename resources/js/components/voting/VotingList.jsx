import React, { useState, useEffect } from "react";

import Global from "../../Global";

import axios from "axios";

const VotingList = () => {
    const [competitions, setCompetitions] = useState([]);
    const [userVoted, setUserVoted] = useState([]);
    const [isLoading, setIsLoading] = useState(true);

    const votingListElement = document.getElementById("voting-list");
    const userId = votingListElement ? votingListElement.dataset.userId : null;
    const categoryId = votingListElement
        ? votingListElement.dataset.categoryId
        : null;

    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    axios.defaults.headers.common["X-CSRF-TOKEN"] = csrfToken;
    axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

    // Get the user ID value
    // const userId = document.querySelector('meta[name="data-user-id"]').getAttribute('content');

    // // Get the category ID value
    // const categoryId = document.querySelector('meta[name="data-category-id"]').getAttribute('content');

    useEffect(() => {
        fetchCompetitions();
        // alert('test')
    }, []);

    const fetchCompetitions = async () => {
        try {
            // Replace 'YOUR_API_ENDPOINT' with the actual endpoint that serves image data
            const response = await axios.get(
                `${Global.api}/get-ganesh-competition/${categoryId}/${userId}`
            );
            setCompetitions(response.data.competitions);
            setUserVoted(response.data.user_voted);
            setIsLoading(false);

            // toastr.success('Logo Deleted Successfully!');
            console.log("get", response.data);
        } catch (error) {
            setIsLoading(false);

            console.error("Error fetching images:", error);
        }
    };
   
    const [selectedParticipant, setSelectedParticipant] = useState(null);
    const [voteSubmitted, setVoteSubmitted] = useState(false);

    const handleVote = async (
        competitionId,
        participantId,
        userId,
        categoryId
    ) => {

        const data = new FormData();
        data.append("_csrf", csrfToken);
        data.append("competitionId", competitionId);
        data.append("participantId", participantId);
        data.append("userId", userId);
        data.append("categoryId", categoryId);

        try {
            // Make POST request
            const response = await axios.post(
                "/api/store-competition-vote",
                data,
                {}
            );
            console.log("Form submitted successfully:", response.data);
            if (response.data.status == true) {
                toastr.success(response.data.message);
            } else {
                toastr.error(response.data.message);
            }
        } catch (error) {
            alert(error);
            console.error("Something went wrong. please try again.");
            toastr.error(error);
        }

        // alert(csrfToken);
        // Handle vote submission, e.g., send a POST request to your Laravel backend
        // try {
        //     await axios.post("/api/store-competition-vote", { participant_id: participantId });
        //     setVoteSubmitted(true);
        // } catch (error) {
        //     console.error("Error submitting vote:", error);
        // }
    };

    return (
        <>
            <div className="flex">
                {isLoading ? (
                    <div className="text-center">
                        
                    <div className="text-center">
                        <div className="loader"></div>
                    </div>
                    </div>
                ) : null 
                }
<div className="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4">
                {competitions.map((competition, index) => (
                    <div className="card mb-2" key={index}>
                        <a
                            href={
                                competition.participant
                                  ? `${Global.baseUrl}/ganesh-festival/${competition.participant.slug}`
                                  : '#'
                              }

                        >
                            <div className="card-media h-40">
                                <img
                                    src={`https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/${competition.participant.cover}/sm`}
                                />
                            </div>
                        </a>
                        <div className="card-body">
                            <a
                                href={`${Global.baseUrl}/ganesh-festival/${competition.participant.slug}`}
                            >
                                <h4 className="card-title">
                                    {competition.participant.name}
                                </h4>
                            </a>
                            <div className="flex">
                                <ion-icon
                                    className="text-md live-d-icon"
                                    name="location-outline"
                                />
                                <p className="text-sm">
                                    {competition.participant.address}
                                </p>
                            </div>
                            <div className="card-text">
                                <div className="card-list-info font-normal mt-1 bg-voting">
                                    <div className="font-bold text-danger text-xl">
                                        Total Votes:{competition.votes_count}
                                    </div>
                                    <a
                                        className="font-bold text-danger text-xl"
                                        href="#"
                                    ></a>
                                </div>
                            </div>

                            <div className="flex gap-2">
                                {userVoted &&
                                competition.id === userVoted.competition_id ? (
                                    <p className="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                        <ion-icon name="thumbs-up-outline" />
                                        Voted
                                    </p>
                                ) : userVoted || userId == 0 ? (
                                    <p className="button text-lg bg-primary flex-1 btn-voting-disable">
                                        <ion-icon name="thumbs-up-outline" />
                                        Vote now
                                    </p>
                                ) : (
                                    <button
                                        type="submit"
                                        className="button text-lg bg-primary text-white flex-1"
                                        onClick={() =>
                                            handleVote(
                                                competition.id,
                                                competition.participant.id,
                                                userId,
                                                categoryId
                                            )
                                        }
                                    >
                                        <ion-icon name="thumbs-up-outline" />
                                        Vote Now
                                    </button>
                                )}

                                {/* {
                                    competition.is_voted === 1 ? (
                                        <p className="button text-lg bg-success text-white flex-1 btn-not-allowed">
                                            <ion-icon name="thumbs-up-outline" />
                                            Voted
                                        </p>
                                    ) : (
                                        <p className="button text-lg bg-primary text-white flex-1 btn-voting-disable">
                                            <ion-icon name="thumbs-up-outline" />
                                            Vote now
                                        </p>
                                    )
                                } */}

                                <a
                                    href={`${Global.baseUrl}/ganesh-festival/${competition.participant.slug}`}
                                    className="button text-lg bg-secondery !w-auto"
                                >
                                    <ion-icon name="eye-outline" /> View
                                </a>
                            </div>
                        </div>
                    </div>
                ))}
                </div>
            </div>
        </>
    );
};

export default VotingList;
